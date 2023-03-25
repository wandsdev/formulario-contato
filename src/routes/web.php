<?php

use Illuminate\Support\Facades\Route;
use WandsDev\FormularioContato\Http\Controllers\FormularioContatoController;

//Route::group(['namespace' => 'MyVendor\FormularioContato\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('contato', [FormularioContatoController::class, 'index']);
    Route::post('contato', [FormularioContatoController::class, 'enviarEmail'])->name('contato');
//});
