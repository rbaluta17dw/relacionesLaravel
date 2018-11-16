@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')
<h2>Estadisticas</h2>
<ul>
  <li>Departamento con mas empleados: <br></br> Numero de empleados: {{$numEmpleados}}<br></br> </li>
  <li>Proyecto con mas empleados: <br></br> Numero de empleados: <br></br> </li>
  <li>Proyectos iniciados esta semana: <br></br></li>
  <li>Proyectos que tienen que terminan esta semana: <br></br></li>
</ul>

@endsection
