<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('guest')->group(function(){
    Route::get('/login',[LoginController::class,'show']);
    Route::post('/login',[LoginController::class, 'login']);

  

});


Route::middleware(['auth', 'role:admin'])->group(function(){

    Route::get('/dashboard',function(){
        return 'test';
    });

    Route::get('/books',[BookController::class,'index']);
    Route::get('/books/create',[BookController::class,'create']);
    Route::post('/books/create',[BookController::class,'store']);
    Route::get('/books/edit/{id}', [BookController::class ,'edit']);
    Route::put('/books/edit/{id}', [BookController::class ,'update']);
    Route::delete('/books/{id}',[BookController::class,'destroy']);

    
    Route::get('/users',[AnggotaController::class,'index']);
    Route::get('/users/create',[AnggotaController::class,'create']);
    Route::post('/users/create',[AnggotaController::class,'store']);
    Route::get('/users/edit/{id}', [AnggotaController::class ,'edit']);
    Route::put('/users/edit/{id}', [AnggotaController::class ,'update']);
    Route::delete('/users/{id}',[AnggotaController::class,'destroy']);

    
    Route::get('/orders',[OrderController::class,'index']);
    Route::get('/orders/create',[OrderController::class,'create']);
    Route::post('/orders/create',[OrderController::class,'store']);
    Route::get('/orders/edit/{id}', [OrderController::class ,'edit']);
    Route::put('/orders/edit/{id}', [OrderController::class ,'update']);
    Route::delete('/orders/{id}',[OrderController::class,'destroy']);


});


Route::middleware(['auth','role:siswa'])->group(function(){
    Route::get('/siswa/dashboard',function(){
        return view('siswa.dashboard');
    });


    Route::get('/siswa/order',[SiswaController::class, 'orderCreate']);
    Route::post('/siswa/order/{id}', [SiswaController::class,'orderStore']);
});


Route::get('/logout', [LogoutController::class,'logout']);
