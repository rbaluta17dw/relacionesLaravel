@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>


  <table>
    <tr>
      <th>Id</th>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Jefe Departamento</th>
    </tr>
    @foreach($departamentos as $departamento)
    <tr>
      <td><a class="link" href="{{route('departamento',$departamento->id)}}">{{$departamento->id}}</a></td>
      <td>{{$departamento->codigo}}</td>
      <td>{{$departamento->nombre}}</td>
      @if(isset($departamento->jefe))
      <td><a class="link" href="{{route('empleado',$departamento->jefe->id)}}">{{$departamento->jefe->nombre}}</a></td>
      @endif
    </tr>
    @endforeach
  </table>

@endsection
