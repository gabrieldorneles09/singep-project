<div id="modalCadastro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Cadastro de Usuário</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <div class="row">
            <div class="col">
              <label>Nome Completo:</label>
              <input type="text" class="form-control" name="nome" v-model="adicionar.nome" placeholder="Digite o nome completo:">
            </div>
            <div class="col">
              <label>E-mail:</label>
              <input type="mail" class="form-control" name="nome" required v-model="adicionar.email" placeholder="Digite o e-mail:">
            </div>
            <div class="col">
              <label>Senha:</label>
              <input type="password" class="form-control" name="senha" v-model="adicionar.senha" placeholder="Digite a senha:">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col">
              <label>CPF:</label>
              <input type="text" class="form-control" name="cpf" v-model="adicionar.cpf" placeholder="Digite o CPF:" maxlength="11" >
            </div>
            <div class="col">
              <label>Celular</label>
              <input type="text" class="form-control" name="tel" v-model="adicionar.telefone" placeholder="(XX)XXXXX-XXXX">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col">
              <label>Filiação</label>
              <select class="custom-select" v-model="adicionar.filiacao">
               <option  value="0" disabled> Selecione a Filiação</option>
               <option value="1">Interno</option>
               <option value="2">Externo</option>
             </select>
          </div>
          <div class="col">
            <label>Tipo de Usuário</label>
            <select class="custom-select" v-model="adicionar.permissao">
             <option value="0" disabled> Selecione o tipo de usuário</option>
             <option value="1">Palestrante</option>
             <option value="2">Participante</option>
           </select>
        </div>

        </div>

      </div>
      <div class="modal-footer">
        <div class="row">
          <div class="col">
            <button type="button" class="btn btn-warning" v-on:click="save()" >Salvar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
