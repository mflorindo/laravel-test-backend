<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadeFederativa extends Model
{
    protected $table = 'unidades_federativas';
    protected $primaryKey = 'sigla';
    public $timestamps = false;

}
