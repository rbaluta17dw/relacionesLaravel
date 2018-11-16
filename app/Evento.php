<?php
/*
El modelo de evento
se engarga de las relaciones
*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
  // La relacion de eventos con proyectos
  public function proyectos()
  {
      /* En una relacion M:N 'belongsToMany'
          es cualquiera de las dos partes */
      return $this->belongsToMany('App\Proyecto');
  }
}
