<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::paginate(2);
        return view('home', compact('restaurants'));
    }

    public function get(Restaurant $slug)
    {
        $restaurant = $slug;

        // $restaurant = Restaurant::whereSlug($slug);

        return view('single', compact('restaurant'));
    }
}
