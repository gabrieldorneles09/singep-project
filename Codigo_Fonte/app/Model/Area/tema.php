<?php

namespace App\Model\Area;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tema extends Model
{
  use SoftDeletes();
  protected $table = "tema";
  protected $fillable = ['area-id','descricao'];
}
