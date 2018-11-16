<?php

namespace App\Http\Controllers;
use App\Empleado;
use App\Proyecto;
use App\Departamento;
use Illuminate\Http\Request;

class EstadisticaController extends Controller
{
  public function contEmpleadosDepartamentos ($departamentos)
  {
    $numEmpleados = 0;
    foreach ($departamentos as $departamento) {
      $numEmpleadosDep = count($departamento->empleados);
      if ($numEmpleadosDep > $numEmpleados){
        $numEmpleados = $numEmpleadosDep;
      }
    }
    return $numEmpleados;
  }

  public function depMaxEmpleados ($departamentos)
  {
    
  }

  public function index ()
  {
    // Recojo los datos de la base de datos y los meto en variables
    $departamentos = Departamento::all();
    $proyectos = Proyecto::all();
    $empleados = Empleado::all();
    return view ('estadistica.index',['numEmpleados' => $this->contEmpleadosDepartamentos($departamentos)]);
  }


}
