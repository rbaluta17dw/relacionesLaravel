<?php
/*
El controlador del empleado
recoge los datos de la base de datos
y lo envia a la pagina.
*/
namespace App\Http\Controllers;
use App\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
  // Coge todos los empleados y los envia a la pagina empleados
  public function index ()
  {
    $empleados = Empleado::all();
    return view ('empleados.index',['empleados' => $empleados]);
  }
  // Coge un empleado en concreto y lo envia a la pagina empleado
  public function get ($id)
  {
    $empleado = Empleado::find($id);
    return view ('empleados.empleado',['empleado' => $empleado]);
  }
}
