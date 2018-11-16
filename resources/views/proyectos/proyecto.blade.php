@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyecto: {{$proyecto->nombre}}</h2>
  <h3>Titulo: {{$proyecto->titulo}}</h3>
  <h3>Responsable: <a class="link" href="{{route('empleado',$proyecto->empleado->id)}}">{{$proyecto->empleado->nombre}}</a></h3>
  @if(isset($proyecto->empleados))
  <h3>Colaboradores:</h3>
  @foreach($proyecto->empleados as $empleado)
  <p><a class="link" href="{{route('empleado',$empleado->id)}}">{{$empleado->nombre}}</a></p>
  @endforeach
  @else

  @endif
@endsection
