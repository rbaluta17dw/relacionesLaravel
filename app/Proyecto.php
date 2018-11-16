<?php
/*
El modelo de proyecto
se engarga de las relaciones
*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    // La relacion de proyecto con empleado
    public function empleado()
    {
        /* En una relacion 1:1 'belongsTo' es
        la parte que pertenece a la otra parte */
        return $this->belongsTo('App\Empleado');
    }
    // La relacion de proyectos con empleados
    public function empleados()
    {
        /* En una relacion M:N 'belongsToMany'
            es cualquiera de las dos partes */
        return $this->belongsToMany('App\Empleado');
    }
    // La relacion de eventos con proyectos
    public function eventos()
    {
        /* En una relacion M:N 'belongsToMany'
            es cualquiera de las dos partes */
        return $this->belongsToMany('App\Evento');
    }
}
