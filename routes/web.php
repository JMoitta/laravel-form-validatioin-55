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

Route::get('/', function () {
    return view('welcome');
});

Route::get('form-validation-55/{num}', function ($num) {
    return view('form-validation-55.video-' . $num);
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'], function () {
    Route::resource('clients', 'ClientsController');
});

Route::name('meu-nome')
    ->get('/rota-nomeada/qualquer-coisa', function(){
    echo "Hello World!!";
});

Route::get('/rota-nomeada/qualquer-coisa', function(){
    echo "Hello World!!";
})->name('meu-nome1');