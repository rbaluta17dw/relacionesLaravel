@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Lugar</th>
      <th>Fecha inicio</th>
      <th>Fecha fin</th>
    </tr>
    @foreach($eventos as $evento)
    <tr>
      <td><a class="link" href="{{route('evento',$evento->id)}}">{{$evento->id}}</a></td>
      <td>{{$evento->nombre}}</td>
      <td>{{$evento->lugar}}</td>
      <td>{{$evento->fechainicio}}</td>
      <td>{{$evento->fechafin}}</td>
    </tr>
    @endforeach
  </table>

@endsection
