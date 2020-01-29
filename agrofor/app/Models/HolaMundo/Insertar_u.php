<?php

namespace App\Models\HolaMundo;

use Illuminate\Database\Eloquent\Model;

class Insertar_u extends Model
{
     //aqui se declara el nombre de la tabla que esta en mysql
     protected  $table = 'datos';
     // aqui la llave primaria de la tabla
     protected $primarykey = 'id';
     //public $incrementing = false;
     public $timestamps = false;
     // aqui los elementos a mostrarse de la tabla en cuestion
     protected $fillable = [
       'id','nombre','apellido_pat','apellido_mat','usuario','pass','fecha'];
}
