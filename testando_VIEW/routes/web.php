<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boatarde', function ( Request $req ) {
    return "Boa tarde, $req->nome!";
});

//passagem de parâmetro 
/*Route::get('/boatarde/{nome}/{idade?}', function ( $nome, $idade=null ) {
    if ($idade) {
        return "Boa tarde, $nome! <br>Sua idade é: $idade anos!";
    }
    return "Boa tarde, $nome! Idade é apenas um número!";
});*/


Route::get('/boatarde/{nome}/{idade?}', function ( $nome, $idade=null ) {    
    //return view('boatarde', ['nome' => $nome,  'idade'=> $idade]);
    return view('boatarde', compact('nome','idade')); 
    // compact otimizador da passagem de parametros os nomes das variáveis devem ser iguais, pega o valor da 
    // variavel e passa para função
});

Route::get('/boatarde/{nome}/{idade?}', function ( $nome, $idade=null ) {    
    $tabela = [
    ['nome' => 'Cecilia',  'idade'=> 34],
    ['nome' => 'Maria Fernanda',  'idade'=> 20],
    ['nome' => 'Michele',  'idade'=> 21],
    ['nome' => 'Claudia',  'idade'=> null],
    ['nome' => 'Glauber',  'idade'=> 32],
    ['nome' => 'Wallace',  'idade'=> 43],
    ['nome' => 'Luiz',  'idade'=> 35],
    ['nome' => 'Aldo',  'idade'=> 42]
    ];
    
    $html = '<script>alert()</script>';

    return view('boatarde', compact('nome','idade', 'tabela')); 
    
});


Route::get('/home', function () {
    return view('home2'); 
});

Route::get('/info', function () {
    return view('info'); 
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
