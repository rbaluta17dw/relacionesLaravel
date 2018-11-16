@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')
<h2>Estadisticas</h2>
<ul>
  <li>Departamento con mas empleados:  {{$depMaxEmpleados}} <br>Numero de empleados: {{$numEmpleados}}</li>
  <li>Proyecto con mas empleados: {{$proyMaxEmpleados}} <br>Numero de empleados: {{$contEmpleadosProyectos}} </li>
</ul>

@endsection
