<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){
        $data = [
            'Matue',
            'Rich the Kid',
            'Kyan'
        ];
       
        return view('series.index')->with('data', $data);
    }

    public function create(){
        return view('series.create');
    }
}