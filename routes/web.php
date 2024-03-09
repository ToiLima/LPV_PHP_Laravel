<?php

    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/', function () {
        return view('welcome');
    });

    // rota que retorna uma ola
    Route::get('/olamundo', function () {
        return "ola mundo";
    });

    // rota GET que retorna uma msg com parâmetro
    // não obrigatorio
    Route::get('/faleconosco/{id?}', function ($id = null){ 
        return "recebi o valor = $id"; 
    });
    
    //View->Controller
    
    Route::post('/contato', ['uses'=>'App\Http\Controllers\ContatoController@index']);

    