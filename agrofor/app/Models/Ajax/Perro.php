<?php

namespace App\Models\Ajax;

use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
     //aqui se declara el nombre de la tabla que esta en mysql
     protected  $table = 'perro';
     // aqui la llave primaria de la tabla
     protected $primarykey = 'id';
     //public $incrementing = false;
     public $timestamps = false;
     // aqui los elementos a mostrarse de la tabla en cuestion
     protected $fillable = [
       'id','nombre','raza','estatus'];
}
