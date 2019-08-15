<?php

namespace App\Http\Controllers;

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
}
