<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

//Aulas 1 a 8
/*Route::get('/', function () {
    $nome = "Renato";
    $idade = 20;
    $arr = [1,2,3,4,5];
    $nomes = ["Renato", "Paula","Laura", "Helena"];



    return view('welcome', 
        ['nome'=> $nome, 
        'idade'=> $idade, 
        'profissao'=>'professor',
        'arr'=>$arr,
        'nomes'=>$nomes
    ]);
});*/

//Aula 9 - vídeo 9 - https://www.youtube.com/watch?v=O0enF2nVBNE&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=9
Route::get('/eventos', [EventController::class,'index']);
Route::get('/events/create', [EventController::class,'create']);
Route::post('/events', [EventController::class,'store']);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});



/*
Route::get('/paz', function () {
    return view('paz');
});
*/
/*
Route::get('/paz', function () {
    $data = [
        'message' => 'Olá, bem-vindo ao meu site!'
    ];
    return view('paz', $data);
});
*/
Route::get('/paz', function () {
    $messages = [
        "paz no Oriente Médio",
        "A paz é a única forma de nos sentirmos realmente humanos",
        "Não existe um caminho para a paz. A paz é o caminho"
    ];
    $isUserLoggedIn = false;
    $randomMessage = $messages[array_rand($messages)];
    return view('paz', ['message' => $randomMessage, 
                        'usuario'=>$isUserLoggedIn]);
});

Route::post('/cadastro', 'CadastroController@submitForm');
//php artisan make:controller ContactController
//Isso criará um arquivo chamado ContactController.php na pasta app/Http/Controllers.


Route::get('/produtos2', 'EventController@index');
Route::get('/produtos2/{id}', 'EventController@show');

//testes
/*Route::get('/', function () {
    return view('inicio');
});
*/

Route::get('/teste', function () {
    $nome = "Renato";
    $idade = 20;
    $arr = [1,2,3,4,5];
    $nomes = ["Renato", "Paula","Laura", "Helena"];



    return view('welcome', 
        ['nome'=> $nome, 
        'idade'=> $idade, 
        'profissao'=>'professor',
        'arr'=>$arr,
        'nomes'=>$nomes
    ]);

});
Route::get('/produtos/{id}', function($id){
    return view('layouts.product',['id' => $id]);
});
Route::get('/produtos_teste/{id?}', function($id = null){
    return view('layouts.product',['id' => $id]);
});
Route::get('/produtos', function(){

    $busca = request('search');
    return view('products',['busca'=>$busca]);
});

Route::get('/inicio', function(){

   
    return view('inicio',[EventController::class,'index']);
});