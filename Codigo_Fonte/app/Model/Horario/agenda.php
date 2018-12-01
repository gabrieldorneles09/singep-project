<?php

namespace App\Model\Horario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class agenda extends Model
{
    use SoftDeletes;
    protected $table = "agenda";
    protected $fillable = ['participante_id','artigo_id'];

}
