<?php

namespace App\Model\Artigo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class artigo extends Model
{
    use SoftDeletes;
    protected $table = "artigo";
    protected $fillable = ['data','horario','local','tipo_trabalho','area','tema','titulo','resumo'];
}
