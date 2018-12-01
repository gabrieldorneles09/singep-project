
@extends('layouts.padrao')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
    #form{
      width:700px;
    }
  </style>
</head>
<body id="conteudo-vue">
  @section('content')
    <div>
      @include('login.partes.card')
    </div>
  @endsection
</body>
</html>
