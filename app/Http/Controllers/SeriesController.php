<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){
        $series = $series = Serie::query()->orderby('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('series.index', compact('series', 'mensagem'));
    }

    public function create(){
        return view('series.create');
    }
    public function store(SeriesFormRequest $request){

        $serie = Serie::create ($request->all());
        return to_route('series.index')->with('mensagem', "Serie {$serie->nome} cadastrada com sucesso!");
    }
    public function destroy(Request $request){
        Serie::destroy($request->id);
        return to_route('series.index')->with('mensagem', 'Serie removida com sucesso!');
    }
}

