<table class="table table-striped">
  <thead>
    <tr>
  <th>Nome</th>
  <th>Filiação</th>
  <th>CPF</th>
  <th>Status</th>
  <th>Permissão</th>
  <th><i class="fas fa-cogs"></i></th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="registro in registros ">
      <th>@{{ registro.nome }}</th>
      <th>@{{ registro.filiacao }}</th>
      <th>@{{ registro.cpf }}</th>
      <th>@{{ registro.status }}</th>
      <th>@{{ registro.permissao }}</th>
      <td>
        <a href="#" v-on:click="editarRegistro(linha)" data-toggle="modal" data-target="#modalUsuario"><i class="fas fa-edit"></i></a>
        <a class="text-danger" v-on:click="excluirRegistro(linha.id)" href="#" ><i class="fas fa-trash" aria-hidden="true"></i></a>

      </td>
    </tr>
  </tbody>
</table>
