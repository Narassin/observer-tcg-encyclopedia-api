<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

Route::get('/cards', [App\Http\Controllers\CardController::class, 'index']);
Route::get('/card/{id}', [App\Http\Controllers\CardController::class, 'show']);


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
