<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Radio;
use App\Tv;
use App\Nota;
use App\NotaRadio;
use App\NotaTv;
use App\Http\Requests;

class NotasController extends Controller
{
    public function index()
    {
        $data = [
            'notas' => Nota::all(),
            'tvs'   => Tv::all()
        ];
        return view('notas.index', $data);
    }
    public function createRadio()
    {
        $radios = Radio::all();
        return view('notas.radio.create', compact('radios'));
    }
    public function createTv()
    {
        $tvs = Tv::all();
        return view('notas.tv.create', compact('tvs'));
    }
    public function storeRadio(Request $request)
    {
        if($request->get('medio') == 'Radio') {
            $nota             = new Nota;
            $nota->encabezado = $request->get('encabezado');
            $nota->sintesis   = $request->get('sintesis');
            $nota->medio      = $request->get('medio');
            if($nota->save()) {
                $nr           = new NotaRadio;
                $nr->nota_id  = $nota->id; 
                $nr->radio_id = $request->get('fuente');
                if($nr->save()) {
                    return redirect()->route('notas.index');
                }
            }
        }
        return redirect()->back()->withInputs($request->all());
    }

    public function storeTv(Request $request) 
    {
        if($request->get('medio') == "Television") {
            $nota             = new Nota;
            $nota->encabezado = $request->get('encabezado');
            $nota->sintesis   = $request->get('sintesis');
            $nota->medio      = $request->get('medio');
            if($nota->save()) {
                $nt = new NotaTv;
                $nt->nota_id = $nota->id;
                $nt->tv_id = $request->get('fuente');
                if($nt->save()) {
                    return redirect()->route('notas.index');
                }
            }
        }
        return redirect()->back()->withInputs($request->all());
    }
}
