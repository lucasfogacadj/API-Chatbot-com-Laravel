<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabalho extends Model
{
    protected $fillable = [ 
        'titulo', 'dataEntrega', 'dataConcluida', 'anotacoes', 'idUsuario'
     ];
}
