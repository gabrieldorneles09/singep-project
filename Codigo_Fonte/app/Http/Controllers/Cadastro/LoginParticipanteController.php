<?php

namespace App\Http\Controllers\Cadastro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginParticipanteController extends Controller
{
    public function fazerLogin(){
      return view('login.index');
      // echo "Tela de login";
    }
    public function gravar(){

    }
}
