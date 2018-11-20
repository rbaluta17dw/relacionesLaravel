<?php
/*
El modelo de empleado
se engarga de las relaciones
*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
  // La relacion de empleado con proyecto
  public function proyecto()
  {
    /* En una relacion 1:1 'hasOne' es la parte
    a la cual le pertenece un proyecto */
    return $this->hasOne('App\Proyecto');
  }
  // La relaciones empleados con proyectos
  public function proyectos()
  {
    /* En una relacion M:N 'belongsToMany'
    es cualquiera de las dos partes */
    return $this->belongsToMany('App\Proyecto')->withPivot('fechainicio', 'fechafin');
  }
  // La relaciones empleado con departamento
  public function departamento()
  {
    // En un relacion 1:N 'belongsTo' es la parte 1
    return $this->belongsTo('App\Departamento');
  }
  // La relaciones jefe con departamento
  public function departamentoJefe(){
    /* En una relacion 1:1 'hasOne' es la parte
    a la cual le pertenece un departamento */
    return $this->hasOne('App\Departamento','jefe_id');
  }
}
