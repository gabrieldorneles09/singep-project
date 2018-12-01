<?php

namespace App\Model\Usuario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class participante extends Model
{
  use SoftDeletes;
  protected $table = "participante";
  protected $fillable = ['nome','email','cpf','telefone','filiacao','status','permissao'];
  // protected $hidden = [
  //     'cpf', 'remember_token',
  // ];
}
