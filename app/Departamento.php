<?php
/*
El modelo de departamento
se engarga de las relaciones
*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
  // La relacion de departamento con empleado
  public function empleados()
  {
    // En la relacion 1:N 'hasMany' es N
    return $this->hasMany('App\Empleado');
  }
  // La relacion de departamento con jefe
  public function jefe(){
    return $this->belongsTo('App\Empleado','jefe_id');
  }
}
