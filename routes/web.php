<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('guest')->group(function (){

    
Route::get('/login',[LoginController::class, 'show']);
Route::post('/login',[LoginController::class, 'login']);

Route::get('/register',[RegisterController::class ,'show'] );
Route::post('/register', [RegisterController::class ,'register']);
});

Route::middleware(['auth', 'role:admin'])->group(function (){


    Route::get('/dashboard',function (){
        return view('admin.dashboard');
    });

    Route::get('/books',[BookController::class, 'index']);
    Route::get('/books/create',[BookController::class,'create']);
    Route::post('/books/create',[BookController::class , 'store']);
    Route::get('books/edit/{id}',[BookController::class ,'edit']);
    Route::put('books/edit/{id}',[BookController::class , 'update']);
    Route::delete('books/{id}',[BookController::class,'destroy']);

    Route::get('/users',[UserController::class , 'index']);
    Route::get('/users/create',[UserController::class, 'create']);
    Route::post('/users/create',[UserController::class,'store']);
    Route::get('/users/edit/{id}',[UserController::class ,'edit']);
    Route::put('/users/edit/{id}',[UserController::class ,'update']);
    Route::delete('/users/{id}', [UserController::class , 'destroy']);


    Route::get('/orders',[OrderController::class , 'index']);
    Route::get('/orders/create', [OrderController::class, 'create']);
    Route::post('/orders/create', [OrderController::class ,'store']);
    Route::get('/orders/edit/{id}',[OrderController::class,'edit']);
    Route::put('/orders/edit/{id}',[OrderController::class,'update']);
    Route::delete('/orders/{id}', [OrderController::class , 'destroy']);


});


Route::middleware(['auth', 'role:siswa'])->group(function(){
    Route::get('/siswa/dashboard', function(){
        return view('siswa.dashboard');
    });

    Route::get('/siswa/order', [SiswaController::class,'orderCreate']);
    Route::post('/siswa/order/{id}', [SiswaController::class, 'orderStore']);

    
    Route::get('/siswa/return', [SiswaController::class,'returnShow']);
    Route::post('/siswa/return/{id}', [SiswaController::class, 'returnProcess']);

});


Route::get('/logout',[LogoutController::class , 'logout']);

