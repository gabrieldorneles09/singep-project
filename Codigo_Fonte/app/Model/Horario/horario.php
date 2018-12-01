<?php

namespace App\Model\Horario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class horario extends Model
{
    use SoftDeletes;
    protected $table = "horario";
    protected $fillable = ['data-id','horario'];
}
