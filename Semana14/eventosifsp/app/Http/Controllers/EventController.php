<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventController extends Controller
{
    //
    public function index()
    {
    /*
        $nome = "Renato";
        $idade = 20;
        $arr = [1, 2, 3, 4, 5];
        $nomes = ["Renato", "Paula", "Laura", "Helena"];

        return view(
            'layouts.product',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => 'professor',
                'arr' => $arr,
                'nomes' => $nomes,
                'id' =>null
            ]
        );
    */
        $eventos = Evento::all();
        return view("events.index",["events" => $eventos]);
    }
    public function create(){
        return view('events.create');
    }
    public function store(Request $request){
        $event = new Evento;
        $event->titulo = $request->title;
        $event->cidade = $request->city;
        $event->privado = $request->private;
        $event->descricao = $request->description;

        $event->save();

        return redirect('/eventos')->with('msg', 'Evento criado com sucesso');
    }
}
