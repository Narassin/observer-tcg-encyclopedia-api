<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $cards = \App\Models\Card::all();
        return response()->json($cards);
    }

    public function show($id)
    {
        $card = \App\Models\Card::find($id);
        if (!$card) {
            return response()->json(['error' => 'Card not found'], 404);
        }
        return response()->json($card);
}
}
