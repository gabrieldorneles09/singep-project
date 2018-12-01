<?php

namespace App\Model\Area;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class area extends Model
{
    use SoftDeletes();
    protected $table = "area";
    protected $fillable = ['descricao'];
}
