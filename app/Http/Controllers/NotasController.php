<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Radio;
use App\Nota;
use App\NotaRadio;
use App\Http\Requests;

class NotasController extends Controller
{
    public function index()
    {
      $data = [
        'notas'     => Nota::all(),
        'notaradios' => NotaRadio::all()
      ];
      
        return view('notas.index', $data );
    }

    public function create()
    {
        $radios = Radio::all();
        return view('notas.create', compact('radios'));
    }

    public function store(Request $request)
    {
      $nota             = new Nota;
      $nota->encabezado = $request->get('encabezado');
      $nota->sintesis   = $request->get('sintesis');
      $nota->medio      = $request->get('medio');
      if($nota->save()) {
          $radio                 = Radio::find($request->get('fuente'));
          $notaradio             = new NotaRadio;
          $notaradio->nota_id    = $nota->id;
          $notaradio->programa   = $radio->programa;
          $notaradio->conductor  = $radio->conductor;
          $notaradio->estacion   = $radio->estacion;
          $notaradio->horario    = $radio->horario;
          $notaradio->cobertura  = $radio->cobertura;
          $notaradio->comentario = $radio->comentario;
          if($notaradio->save()) {
            return redirect()->route('notas.index');
        }
    }
}

public function show($id)
{
        //
}

public function edit($id)
{
        //
}

public function update(Request $request, $id)
{
        //
}

public function destroy($id)
{
        //
}
}
