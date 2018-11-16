@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

<h2>Empleados</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre/Apellido</th>
    <th>Departamento</th>
    <th>Responsable del proyecto</th>
  </tr>
  @foreach($empleados as $empleado)
  <tr>
    <td><a class="link" href="{{route('empleado',$empleado->id)}}">{{$empleado->id}}</a></td>
    <td>{{$empleado->nombre}} {{$empleado->apellido1}} {{$empleado->apellido2}}</td>
    @if(isset($empleado->departamento))
    <td><a class="link" href="{{route('departamento',$empleado->departamento->id)}}">{{$empleado->departamento->nombre}}</a></td>
    @else
    <td></td>
    @endif
    @if(isset($empleado->proyecto))
    <td><a class="link" href="{{route('proyecto',$empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a></td>
    @else
    <td></td>
    @endif
    <td></td>
  </tr>
  @endforeach
</table>

@endsection
