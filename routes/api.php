<?php

use App\Http\Controllers\AddressesController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Um usuario com 1 endereço

Route::get('/users',[UserController::class, 'index']);
//busca user por id
Route::get('/users/{id}',[UserController::class,'findOne']);
Route::get('/usersAdress/{id}',[UserController::class,'findAdress']);
//incluir novo usuario
Route::post('/users',[UserController::class,'insert']);

Route::get('/addresses',[AddressesController::class,'index']);
//busca endereco por id
Route::get('/addresses/{id}',[AddressesController::class,'findOne']);

Route::post('/addresses',[AddressesController::class,'insert']);


// invoice rotas

Route::get('/invoice',[InvoiceController::class,'index']);
Route::post('/invoice',[InvoiceController::class,'insert']);
Route::get('invoice/{id}',[InvoiceController::class,'findOne']);
