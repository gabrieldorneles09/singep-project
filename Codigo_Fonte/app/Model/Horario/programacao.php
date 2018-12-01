<?php

namespace App\Model\Horario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class programacao extends Model
{
    use SoftDeletes;
    protected $table = "programacao";
    protected $fillable = ['data','hora','titulo'];
}
