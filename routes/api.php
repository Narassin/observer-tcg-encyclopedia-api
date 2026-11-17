<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/cards', function () {
    $cards = \App\Models\Card::all();
    return response()->json($cards);
});
Route::get('/card/{id}', function ($id) {
    $card = \App\Models\Card::find($id);
    if (!$card) {
        return response()->json(['error' => 'Card not found'], 404);
    }
    return response()->json($card);
});


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
