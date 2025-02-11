<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;



Route::get('/', [TodoListController::class, 'getItems'])->name('getItems');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/home', function () {
    return view('home');
});

Route::post('/saveItem', [TodoListController::class, 'saveItem'])->name('saveItem');
