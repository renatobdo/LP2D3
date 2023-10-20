<?php

use App\Http\Controllers\CafebistrolController;
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
Route::get('/ola', function () {
    echo 'Olá, mundo!';
});
Route::get('/cafes', [CafeBistrolController::class, 'index']);
Route::get('/cafes/criar', [CafeBistrolController::class, 'create']);

Route::get('/contact', function(){
    return view ('contact');
});
Route::get('/testes', function () {
    $nome = 'Renato';
    return view('testes',['nome'=>$nome]);
   // return view('testes');
});