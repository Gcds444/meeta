<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;

Route::get('/', [UsuarioController::class,'index']);
Route::resource('/usuario', UsuarioController::class);
Route::get('/lista', [UsuarioController::class,'lista']);
Route::patch('/inativar/{usuario}', [UsuarioController::class,'inativar']);
