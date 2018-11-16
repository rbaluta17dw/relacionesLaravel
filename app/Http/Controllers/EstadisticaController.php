<?php

namespace App\Http\Controllers;
use App\Empleado;
use App\Proyecto;
use App\Departamento;
use Illuminate\Http\Request;

class EstadisticaController extends Controller
{
  public function contEmpleadosValores ($valores)
  {
    $numEmpleados = 0;
    foreach ($valores as $valor) {
      $numEmpleadosDep = count($valor->empleados);
      if ($numEmpleadosDep > $numEmpleados){
        $numEmpleados = $numEmpleadosDep;
      }
    }
    return $numEmpleados;
  }

  public function valMaxEmpleados ($valores)
  {
    foreach ($valores as $valor) {
      if (count($valor->empleados) == $this->contEmpleadosValores($valores)) {
        return $valor->nombre;
      }
    }
  }

  public function index ()
  {
    // Recojo los datos de la base de datos y los meto en variables
    $departamentos = Departamento::all();
    $proyectos = Proyecto::all();
    $empleados = Empleado::all();
    return view ('estadistica.index',['numEmpleados' => $this->contEmpleadosValores($departamentos),
    'depMaxEmpleados' => $this->valMaxEmpleados($departamentos),
    'contEmpleadosProyectos' => $this->contEmpleadosValores($proyectos),
    'proyMaxEmpleados' => $this->valMaxEmpleados($proyectos)]);
  }


}
