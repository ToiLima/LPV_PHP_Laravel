<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(Request $req) {
        //return "Estou no controle";
        //dd($req);  

        /*$contatos = [
            ['NM'=>'HITLER', 'DTA'=>'1933'],
            ['NM'=>'MUSSOLINE', 'DTA'=>'1922'],
            ['NM'=>'HIROITO', 'DTA'=>'1926'],
            ['NM'=>'HORTHY', 'DTA'=>'1920'],
            ['NM'=>'FRANCO', 'DTA'=>'1936'],
            ['NM'=>'SALAZAR', 'DTA'=>'1932']
        ];*/
        $contatos = [
            ['NM'=>$req, 'DTA'=>$req]
        ];
        return view("contato.index", compact('contatos'));
    }
}
