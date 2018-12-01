@extends('layouts.padrao')
     @section('content')
     <div id="cadastro">
       <div class="col-12">
          @include('cadastro.participante.partes.painel')
          @include('cadastro.participante.partes.modal')
       </div>
     </div>
     <script type="text/javascript" src="resources/js/participante.js"></script>
     @endsection
