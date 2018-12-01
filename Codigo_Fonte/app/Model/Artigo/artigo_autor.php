<?php

namespace App\Model\Artigo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class artigo_autor extends Model
{
    use SoftDeletes;
    protected $table = "artigo_autor";
    protected $fillable = ['artigo_id','autor_id'];
}
