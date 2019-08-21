<?php

namespace App\Http\Controllers;
use App\Travel_game;

class ExampleController extends Controller
{
    public function index()
    {
        return response()->json(['name' => 'Abigail', 'state' => 'CA']);
    }

    public function frontend()
    {
        return view('frontend', ['name' => 'James']);
    }
    public function showOptionSpots()
    {
        $travel_games = Travel_game::all();
        foreach ($travel_games as $travel_game) {
            $keywords = $travel_game->option_A()->first()->keywords()->get();
            foreach ($keywords as $value) {
                $spots[] = $value->spots;
            }
        }
        return response()->json($spots);
    }
}
