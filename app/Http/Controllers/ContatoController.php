<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(Request $req) {
        //return "Estou no controle";
        //dd($req);  
        
        $contatos = [
            ['NM'=>$req->NM, 'DTA'=>$req->DTA]
        ];
        return view("contato.index", compact('contatos'));  //Controller -> View  
    }
}
