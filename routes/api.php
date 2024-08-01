<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function (Request $request) {
    return "Hello world";
});

Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/register', 'App\Http\Controllers\AuthController@register');

Route::get('/logs', 'App\Http\Controllers\LogsController@index');
Route::post('/logs', 'App\Http\Controllers\LogsController@store');
