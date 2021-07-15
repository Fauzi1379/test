<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurant = Restaurant::all();
        return view('restaurant', [
            'restaurant' => $restaurant,
        ]);
    }

    public function store(Request $request)
    {
        $restaurant = new Restaurant;
        $restaurant-> name =$request->name;
        $restaurant-> price =$request->price;
        $restaurant-> category =$request->category;
        $restaurant->save();
        return json_encode('success');
    }
}
