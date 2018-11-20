@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

<h2>Empleado: {{$empleado->nombre}} {{$empleado->apellido1}} {{$empleado->apellido2}}</h2>
@if(isset($empleado->proyecto))
<h3>Responsable del proyecto: <a class="link" href="{{route('proyecto',$empleado->proyecto->id)}}">{{$empleado->proyecto->titulo}}</a></h3>
@else
<h3>No es responsable de ningun proyecto</h3>
@endif
@if(isset($empleado->departamentoJefe))
<h3>Jefe del Departamento: <a class="link" href="{{route('departamento',$empleado->departamentoJefe->id)}}">{{$empleado->departamentoJefe->nombre}}</a></h3>
@endif
@if(isset($empleado->proyectos))
<h3>Colabora en los siguientes proyectos: </h3>
@foreach($empleado->proyectos as $proyecto)
<p><a class="link" href="{{route('proyecto',$proyecto->id)}}">{{$proyecto->nombre}}</a></p>
@endforeach
@endif
@endsection
