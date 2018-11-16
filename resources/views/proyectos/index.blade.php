@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

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
