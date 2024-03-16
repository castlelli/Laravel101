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

//Barra indica que a rota é raiz ou principal (Default)
Route::get('/', function () {
    return view('contato/form'); //Essa rota retornará a view form (form.blade.php)
});


//Rota que retorna uma string ("Olá Mundo")
Route::get('/olamundo',function () { //Rodará quando você rodar: códservidor/olamundo
    return "ola mundo"; 
});

//Rota GET, retorna uma string
    //Parâmetro com "?" -> Não obrigatório
    Route::get('/faleconosco/{id?}',function ($id = null){ 
        if($id)
        return "Recebi o valor = $id";
        else
        return "Não recebi nada!";
    });

/*Route::post('/contato', function () {
 dd($_POST['senha']);
});*/


//Quando a rota contato for chamada, ele 'usa' contatoController.teste()
Route::post('/contato', ['uses'=>'App\Http\Controllers\contatoController@agenda']);