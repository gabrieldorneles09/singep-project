<?php

namespace App\Model\Notificacao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class notificacao extends Model
{
    use SoftDeletes;
    protected $table = "notificacao";
    protected $fillable = [];
}
