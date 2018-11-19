@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyecto: {{$proyecto->nombre}}</h2>
  <h3>Titulo: {{$proyecto->titulo}}</h3>
  <h3>Responsable: <a class="link" href="{{route('empleado',$proyecto->empleado->id)}}">{{$proyecto->empleado->nombre}}</a></h3>
  @if(isset($proyecto->empleados))
  <h3>Colaboradores:</h3>
  @foreach($proyecto->empleados as $empleado)

  <p><a class="link" href="{{route('empleado',$empleado->id)}}">{{$empleado->nombre}}</a> Fecha Inicio: {{ \Carbon\Carbon::parse($empleado->pivot->fechainicio)->format('d/m/Y')}} Fecha Fin: {{ \Carbon\Carbon::parse($empleado->pivot->fechafin)->format('d/m/Y')}}</p>
  @endforeach
  @else

  @endif
@endsection
