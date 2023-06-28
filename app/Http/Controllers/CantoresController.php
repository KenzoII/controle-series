<?php

namespace App\Http\Controllers;

use App\Models\Singers;
use Illuminate\Http\Request;

class CantoresController extends Controller
{
    public function index(){
        $data = Singers::query()->orderBy('name','asc')->get();
       
        return view('cantores.index')->with('data', $data);
    }

    public function create(){
        return view('cantores.create');
    }

    public function store(Request $request){
        $nomeCantor = $request->input('name');
        $singers = new Singers();
        $singers->name = $nomeCantor;
        $singers->save();
        return redirect('/cantores');
    }
}