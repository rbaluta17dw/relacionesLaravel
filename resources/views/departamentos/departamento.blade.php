@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamento: {{$departamento->nombre}}</h2>
  <h3>Codigo: {{$departamento->codigo}}</h3>
  @if(isset($departamento->empleados))
  <h3>Empleados: </h3>
  @foreach($departamento->empleados as $empleado)
  <p><a class="link" href="{{route('empleado',$empleado->id)}}">{{$empleado->nombre}}</a></p>
  @endforeach
  @else
  <h3>Empleados: No hay empleados</h3>
  @endif
@endsection
