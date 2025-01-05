<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;



Route::get('/', [TodoListController::class, 'getItems'])->name('getItems');

Route::post('/saveItem', [TodoListController::class, 'saveItem'])->name('saveItem');
