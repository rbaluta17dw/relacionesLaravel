@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Evento: {{$evento->nombre}}</h2>
  <h3>Lugar: {{$evento->lugar}}</h3>
  <h3>Fecha inicio: {{$evento->fechainicio}}</h3>
  <h3>Fecha fin: {{$evento->fechafin}}</h3>
  @if(isset($evento->proyectos))
  <h3>Proyectos en el evento</h3>
  @foreach($evento->proyectos as $proyecto)
  <h3>Proyecto:  <a class="link" href="{{route('proyecto',$proyecto->id)}}">{{$proyecto->nombre}}</a></h3>
  <ul>
    <li><h3>Titulo: <a class="link" href="{{route('proyecto',$proyecto->id)}}">{{$proyecto->titulo}}</a></li>
    @if(isset($proyecto->empleados))
    <li><h3>Colaboradores:</h3>
    @foreach($proyecto->empleados as $empleado)
    <p><a class="link" href="{{route('empleado',$empleado->id)}}">{{$empleado->nombre}}</a></p>
    @endforeach
    </li>
    @endif
  </ul>
  @endforeach
  @else
  <h3>Este evento no tiene proyectos asignados</h3>
  @endif
@endsection
