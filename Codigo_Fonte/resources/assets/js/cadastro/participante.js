new Vue({
  el: '#cadastro',
  data: {
    erro:null,
    registros:{},
    adicionar:{
      id:null,
      nome:'',
      email:'',
      cpf:'',
      telefone:'',
      filiacao:'',
      senha:'',
      permissao:'',
      status:1,
    },

  },
    filters:{
      cpfMask:function(arg){
         return mask('000.000.000-00', {reverse: true});
       },
    },
    computed:{

    },

    mounted:function(){
    this.list()

  },
    methods:{
    list:function(){
      this.$http.get('/api/usuario/list').then(
        function(response){
          this.$set(this,"registros",response.data)
        },
        function(response){
          this.$set(this,"erro",response.data)
        },
      )
    },

    save:function(){
        this.$http.post('/api/usuario/save',{
          registro:this.adicionar
        }).then(
          function(response){
            this.list();
            $("#modalCadastro").modal('hide');
          },
          function(response){
            this.$set(this,"erro", response.data);
          }
        )

    }

  }

  }
)
