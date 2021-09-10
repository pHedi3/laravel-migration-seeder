<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;

class HomeController extends Controller
{
    public function index() {
        $allTrip = Trip::all();
        $artTrip = Trip::where('genre','arte')->get();
        return view('home', [
            'allTrip' => compact('allTrip'),
            'artTrip' => compact('artTrip')
        ]);
    }
}
