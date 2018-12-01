<?php

namespace App\Model\Restaurante;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class restaurante extends Model
{
    use SoftDeletes;
    protected $table = "restaurante";
    protected $fillable = ['nome','endereco','numero','url_imagem'];
}
