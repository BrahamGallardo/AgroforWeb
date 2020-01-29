<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CitasM extends Model
{
     //aqui se declara el nombre de la tabla que esta en mysql
     protected  $table = 'citas';
     // aqui la llave primaria de la tabla
     protected $primarykey = 'id_citas';
     //public $incrementing = false;
     public $timestamps = false;
     // aqui los elementos a mostrarse de la tabla en cuestion
     protected $fillable = [
       'id_citas','nombre','email','tamanio','descripcion','fecha','hora'];
}
