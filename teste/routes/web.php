<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
/*
Route::get('/', function () {
    return view('paginas/atualizar');
});

Route::get('/cadastrar', function(){
    return view('paginas/cadastrar');
});

Route::get('/produtos/{id?}', function($id = ''){
    return "O id dessa página é: ".$id;
});

Route::get('/sobre', function(){
    return redirect('/cadastrar');
});

//Rotas nomeadas
Route::get('/news', function(){
    return view('paginas/noticias');
})->name('noticias');
Route::get('/novidades', function(){
    return redirect()->route('noticias');
});

Route::redirect('/sobre','/cadastrar');//redirect de forma simples
Route::view('/cadastrar','paginas/cadastrar');//View de forma simples


//Grupo de rotas
Route::prefix('admin')->group(function(){
    Route::get('dashbord', function(){
        return 'dashbord';
    });

    Route::get('users', function(){
        return 'users';
    });

    Route::get('clientes', function(){
        return 'Clientes';
    });
});
*/


//Trabalhando com controllers
/*
Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show');
*/

//Criando rota com o resource
//Aqui coloco o produtos no plural, pois o Laravel entende
Route::resource('produtos',ProdutoController::class);
