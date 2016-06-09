<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Radio;
use App\Http\Requests;

class RadiosController extends Controller
{
    public function index()
    {
        $radios = Radio::all();
        return json_encode($radios);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
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
