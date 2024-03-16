<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    //
    public function teste(Request $req){  
        return view("contato.teste");
    }

    public function agenda(Request $req)
    {
        $agenda = 
        [
            ['nome' =>$req['nome'], 'senha'=>$req['senha']]
        ];
        return view("contato.agenda", compact('agenda'));
    }

}
