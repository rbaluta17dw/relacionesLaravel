<?php

namespace App\Http\Controllers;
use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
  // Coge todos los eventos y los envia a la pagina eventos
  public function index ()
  {
    $eventos = Evento::all();
    return view ('eventos.index',['eventos' => $eventos]);
  }
  // Coge un evento en concreto y lo envia a la pagina evento
  public function get ($id)
  {
    $evento = Evento::find($id);
    return view ('eventos.evento',['evento' => $evento]);
  }
}
