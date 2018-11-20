@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyectos</h2>

<form style="text-align: center;" class="form" action="{{route('proyectoadd')}}" method="post">
  @csrf
  <span >Nombre:</span>
  <input type="text" name="nombre" placeholder="nombre" maxlength="20" min="1" size="15" required value="">
  <span>Titulo:</span>
  <input type="text" name="titulo" placeholder="titulo" maxlength="20" min="1" size="15" required value="">
  <br>
  <span>Fecha Inicio</span>
  <input style="width: 125px;" type="date" name="fechainicio" required value="">
  <span>Fecha Fin:</span>
  <input style="width: 125px;" type="date" name="fechainicio" required value="">
  <br>
  <span>Horas Estimadas:</span>
  <input style="width: 50px;" type="number" required name="horas" value="">
  <span>Jefe Proyecto:</span>
  <select name="empleado">
    @foreach($empleados as $empleado)
    <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
    @endforeach
  </select>
  <br>
  <input type="submit" name="enviar" value="añadir">
</form>
<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Titulo</th>
    <th>Responsable</th>
  </tr>
  @foreach($proyectos as $proyecto)
  <tr>
    <td><a class="link" href="{{route('proyecto',$proyecto->id)}}">{{$proyecto->id}}</a></td>
    <td>{{$proyecto->nombre}}</td>
    <td>{{$proyecto->titulo}}</td>
    @if(isset($proyecto->empleado))
    <td><a class="link" href="{{route('proyecto',$proyecto->empleado->id)}}">{{$proyecto->empleado->nombre}}</a></td>
    @endif
  </tr>
  @endforeach
</table>

@endsection
