{!! Form::open(['route' => 'user.login','method' => 'post']) !!}
<h3>Acesse o sistema</h3>
<br>
<div class="container-fluid" id="form">
  <div class="col-6">
    <div class="row">
      <label id="form1">
        {!! Form::email('email', null,['class' => 'form-control', 'placeholder' => 'ex:fulano@exemplo.com', 'required']) !!}
        <!--parametro required indica o campo obrigatorio -->
        <!-- <form class="form-control" placeholder="CPF" maxlength="11"> -->

        </form>
      </label>
    </div>
  </div>
  <br>
  <div class="col-6">
    <div class="row">
      <label>
        {!! Form::password('cpf',['class' => 'form-control','placeholder' =>'Documento', 'maxlength' => '11']) !!}
      </label>

    </div>
  </div>
  <div class="row" id="btn">
    {!! Form::submit('Entrar',['class' => 'btn btn-success']) !!}
  </div>
</div>
{!! Form::close() !!}
