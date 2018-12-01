<?php

namespace App\Model\Usuario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class palestrante extends Model
{
  use SoftDeletes;
  protected $table = "palestrante";
  protected $fillable = ['participante_id','cidade','estado','email','filiacao','curriculo','url_imagem'];
}
