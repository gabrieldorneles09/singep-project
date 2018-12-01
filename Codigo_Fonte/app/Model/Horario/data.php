<?php

namespace App\Model\Horario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class data extends Model
{
    use SoftDeletes;
    protected $table = "data";
    protected $fillable = ['data','dia_semana'];
}
