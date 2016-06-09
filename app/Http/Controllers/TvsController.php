<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tv;
use App\Http\Requests;

class TvsController extends Controller
{
    public function index()
    {
        $tvs = Tv::all();
        return json_encode($tvs);
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
