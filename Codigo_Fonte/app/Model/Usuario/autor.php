<?php

namespace App\Model\Usuario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class autor extends Model
{
    use SoftDeletes;
    protected $table = "autor";
    protected $fillable = ['nome','cidade','estado','filiacao'];
}
