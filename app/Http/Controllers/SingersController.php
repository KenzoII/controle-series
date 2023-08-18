<?php

namespace App\Http\Controllers;

use App\Models\Singers;
use Illuminate\Http\Request;
use App\Http\Requests\SingersFormRequest;

class SingersController extends Controller
{
    public function index(Request $request){
        $data = Singers::with(['albums'])->get();
        $mensagemSucesso = $request->session()->get('success');
        
        return view('singers.index')->with('data', $data)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(){
        return view('singers.create');
    }

    public function store(SingersFormRequest $request){
        dd($request->all());
        $singer = Singers::create($request->all());

        return to_route('singers.index')->with('success', "Singer {$singer->name} created successfully");
    }

    public function destroy(Singers $singer){
        $singer->delete();

        return to_route('singers.index')->with('success', "Singer {$singer->name} deleted successfully");
    }

    public function edit(Singers $singer){
        return view('singers.edit')->with('singer', $singer);
    }

    public function update(SingersFormRequest $request, Singers $singer){
        $singer->update($request->all());
        
        return to_route('singers.index')->with('success', "Singer {$singer->name} updated successfully");
    }
}