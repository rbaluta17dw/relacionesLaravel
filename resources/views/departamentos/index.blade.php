@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>


  <table>
    <tr>
      <th>Id</th>
      <th>Codigo</th>
      <th>Nombre</th>
    </tr>
    @foreach($departamentos as $departamento)
    <tr>
      <td><a class="link" href="{{route('departamento',$departamento->id)}}">{{$departamento->id}}</a></td>
      <td>{{$departamento->codigo}}</td>
      <td>{{$departamento->nombre}}</td>
    </tr>
    @endforeach
  </table>

@endsection
