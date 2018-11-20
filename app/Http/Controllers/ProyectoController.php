<?php
/*
El controlador del proyecto
recoge los datos de la base de datos
y lo envia a la pagina.
*/
namespace App\Http\Controllers;
use App\Proyecto;
use App\Empleado;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
  // Coge todos los proyectos y los envia a la pagina proyectos
  public function index ()
  {
    $proyectos = Proyecto::all();
    $empleados = Empleado::all();
    return view ('proyectos.index',['proyectos' => $proyectos,
                                    'empleados' => $empleados]);
  }
  // Coge un proyecto en concreto y lo envia a la pagina proyecto
  public function get ($id)
  {
    $proyecto = Proyecto::find($id);
    return view ('proyectos.proyecto',['proyecto' => $proyecto]);
  }

  public function add (Request $request)
  {
    $nombre = $request->input('nombre');
    $titulo = $request->input('titulo');
    $fechainicio = $request->input('fechainicio');
    $fechafin = $request->input('fechafin');
    
    return $this->index();
  }
}
