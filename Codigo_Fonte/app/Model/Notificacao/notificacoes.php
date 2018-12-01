<?php

namespace App\Model\Notificacao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class notificacoes extends Model
{
  use SoftDeletes;
  protected $table = "notificacoes";
  protected $fillable = [];
}
