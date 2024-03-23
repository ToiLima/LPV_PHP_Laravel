<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imcController extends Controller
{
    public function calcularIMC(Request $req) {
        $altr = $req->input('altura');
        $ps = $req->input('peso');

        $imc = $ps/($altr*$altr);
        $msg = "";

        if($imc < 16.9) {
            $mgs = "Muito abaixo do peso";
        }elseif($imc > 17 && $imc < 18.4) {
            $mgs = "Abaixo do peso";
        }elseif($imc > 18.5 && $imc < 24.9) {
            $mgs = "Peso normar";
        }elseif($imc > 25 && $imc < 29.9) {
            $mgs = "Acima do peso";
        }elseif($imc > 30 && $imc < 34.9) {
            $mgs = "Obeso I - Big";
        }elseif($imc > 35 && $imc < 40 ){
            $mgs = "Obeso II - Giant";
        }else {
            $mgs = "Obeso III - Titan";
        }

        return view("calculo", compact('mgs', 'imc'));  
    }
}
