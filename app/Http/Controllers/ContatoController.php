<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(Request $req) {
        //return "Estou no controle";
        //dd($req);  

        //Para o exercício do PDF de controladores e rotas.
        $matriz = [[ "tema"=>"Interface acessivel", 
                     "titulo" =>"App mobile com direitos da pessoa deficiente"],
                   [ "tema"=>"Pedofilia", 
                     "titulo" => "App mobile com orientações gerais aos pais" ]
                  ]; 
        return view("contato.index", compact('matriz'));
        
        /*$contatos = [
            ['NM'=>$req->NM, 'DTA'=>$req->DTA]
        ];*/
        //return view("contato.index", compact('contatos'));  //Controller -> View  
    }
}
