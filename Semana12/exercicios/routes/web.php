<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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
//Exercício 1
/*Route::get('/paz', function () {
    return view('paz');
});
*/
//Exercício 2
/*Route::get('/paz', function () {
    $messages = [
        "paz no Oriente Médio",
        "A paz é a única forma de nos sentirmos realmente humanos",
        "Não existe um caminho para a paz. A paz é o caminho"
    ];  
    return view('paz', ['mensagens' => $messages]);
});
*/
//Exercício 3
/*Route::get('/paz', function () {
    $messages = [
        "paz no Oriente Médio",
        "A paz é a única forma de nos sentirmos realmente humanos",
        "Não existe um caminho para a paz. A paz é o caminho"
    ];
    $randomMessage = $messages[array_rand($messages)];
    return view('paz', ['mensagens' => $randomMessage]);
});*/
//Exercício 4
/*Route::get('/paz', function () {
    $messages = [
        "paz no Oriente Médio",
        "A paz é a única forma de nos sentirmos realmente humanos",
        "Não existe um caminho para a paz. A paz é o caminho"
    ];
    $isUserLoggedIn = false;
    $randomMessage = $messages[array_rand($messages)];
    return view('paz', ['mensagens' => $randomMessage,
                        'usuario'=>$isUserLoggedIn]);
});*/

//Exercício 5
Route::get('/', function () {
    return view('inicio');
});

//Exercício 6
Route::get('/products', function () {
    $products = ['Produto 1', 'Produto 2', 'Produto 3'];
    return view('products', ['products' => $products]);
});
//Exercício 7
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/processContactForm', function () {
    $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Você pode processar os dados aqui (por exemplo, enviar um e-mail).

    return redirect()->route('contact')->
        with('message', 'Mensagem enviada com sucesso!');
})->name('processContactForm');

//Exercício 9

Route::get('/products2', [ProductController::class, 'index'])->name('products.index');
Route::get('/products2/{id}', [ProductController::class, 'show'])->name('products.show');
