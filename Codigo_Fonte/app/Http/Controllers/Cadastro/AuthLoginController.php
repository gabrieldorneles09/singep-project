<?php

namespace App\Http\Controllers\Cadastro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use App\Model\Usuario\participante;



class AuthLoginController extends Controller
{
  protected $repository;
  protected $validator;

  public function __construct(UserRepository $repository, UserValidator $validator)
  {
      $this->repository = $repository;
      $this->validator  = $validator;
  }

//autenticação do sistema
  public function auth(Request $request){
// pega as informações da tela
  $data = [
       'email' => $request->get('email'),
       'cpf' => $request->get('cpf')
  ];
  //trata pra ver se tem erro
  try{
      \Auth::attempt($data, false);
      return redirect()->route('dashboard.index');
  }
  catch(\Exception $e){
    return $e->getMessage();
  }
  //  dd($request->all());
  //   echo "entrou";
  }
  public function index(){
    return "Entrou index";
  }
}
