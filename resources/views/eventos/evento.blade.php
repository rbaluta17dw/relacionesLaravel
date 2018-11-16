@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Evento: {{$evento->nombre}}</h2>
  <h3>Lugar: {{$evento->lugar}}</h3>
  <h3>Fecha inicio: {{$evento->fechainicio}}</h3>
  <h3>Fecha fin: {{$evento->fechafin}}</h3>

  
@endsection
