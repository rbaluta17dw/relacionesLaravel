<?php
/*
El controlador del proyecto
recoge los datos de la base de datos
y lo envia a la pagina.
*/
namespace App\Http\Controllers;
use App\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
  // Coge todos los proyectos y los envia a la pagina proyectos
  public function index ()
  {
    $proyectos = Proyecto::all();
    return view ('proyectos.index',['proyectos' => $proyectos]);
  }
  // Coge un proyecto en concreto y lo envia a la pagina proyecto
  public function get ($id)
  {
    $proyecto = Proyecto::find($id);
    return view ('proyectos.proyecto',['proyecto' => $proyecto]);
  }

}
