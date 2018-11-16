<?php
/*
El controlador del departamento
recoge los datos de la base de datos
y lo envia a la pagina.
*/
namespace App\Http\Controllers;
use App\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
  // Coge todos los departamentos y los envia a la pagina departamentos
  public function index ()
  {
      $departamentos = Departamento::all();
      return view ('departamentos.index',['departamentos' => $departamentos]);
  }
  // Coge un departamento en concreto y lo envia a la pagina departamento
  public function get ($id)
  {
      $departamento = Departamento::find($id);
      return view ('departamentos.departamento',['departamento' => $departamento]);
  }
}
