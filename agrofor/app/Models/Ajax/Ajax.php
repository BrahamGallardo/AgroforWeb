<?php

namespace App\Models\Ajax;

use Illuminate\Database\Eloquent\Model;

class Ajax extends Model
{
     //aqui se declara el nombre de la tabla que esta en mysql
     protected  $table = 'catalogo_alumnos';
     // aqui la llave primaria de la tabla
     protected $primarykey = 'id';
     //public $incrementing = false;
     public $timestamps = false;
     // aqui los elementos a mostrarse de la tabla en cuestion
     protected $fillable = [
       'id','nombre_alumno','sexo'];
}
