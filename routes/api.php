<?php

use Illuminate\Http\Request;
use App\Http\Controllers\LogC;
use App\Http\Controllers\AuthC;
use App\Http\Controllers\UserC;
use App\Http\Controllers\ProductsC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionC;

route::get('/users',[UserC::class,'index']);
route::get('/users/{id}',[UserC::class,'detail']);

Route::get('/log', [LogC::class, 'index']);
Route::get('/log/{id}', [LogC::class, 'detail']);

Route::get('/products', [ProductsC::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/products/{id}', [ProductsC::class, 'detail'])->middleware(['auth:sanctum']);

Route::get('/transactions', [TransactionC::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/transactions/{id}', [TransactionC::class, 'detail'])->middleware(['auth:sanctum']);

Route::get('/users', [UserC::class, 'index']);
Route::get('/users/{id}', [UserC::class, 'detail']);

Route::post('/login', [AuthC::class, 'login']);

route::get('/admin',function(){
    return Hash::make('admin');
});

route::get('/users',[UserC::class,'index']);
route::get('/users/{id}',[UserC::class,'detail']);

Route::get('/kasir',function(){
    return Hash::make('kasir');
});

Route::get('/owner',function(){
    return Hash::make('owner');
});