<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\SelectDish;
use App\Models\Rating;

use Illuminate\Support\Facades\Auth;

class dishescontroller extends Controller
{
    public function userdishes(){
        $dishes = Dish::all();
        return view('userdishes', compact('dishes'));
    }

    public function admindishes(){
        $dishes = Dish::all();
        return view('admindishes', compact('dishes'));
    }

    public function rating(){
        $dishes = Dish::all();
        return view('rating', compact('dishes'));
    }

    public function selectstore(Request $request)
    {
        $selectedDishes = $request->input('menu');
        $email = Auth::user()->email; 
        $name = Auth::user()->name; 
    
        foreach ($selectedDishes as $dishName) {
            SelectDish::create([
                'name' => $name,
                'email' => $email,
                'dish_name' => $dishName,
            ]);
        }
    
        return redirect()->back()->with('success', 'Dish Selected!');
    }

    public function adddish(Request $request)
    {
        $dishname= $request->input('dishname');
    
        Dish::create([
            'name' => $dishname,
        ]);
        return redirect()->back()->with('success', 'Dish Added!');
    }

    public function viewdishuser($dish)
    {
        $selects = SelectDish::where('dish_name', $dish)->get(); 
        $ratings = Rating::where('dish_name', $dish)->pluck('rating'); 
        $count = $ratings->count(); 

        if ($count > 0) {
            $sum = $ratings->sum(); 
            $averageRating = $sum / $count; 
            $averageRating = round($averageRating, 1);
        } else {
            $averageRating = 0; 
        }
        return view('selectedusers', compact('selects','averageRating','dish'));
    }

    public function ratestore(Request $request)
    {

        $request->validate([
            'dish_name' => 'required|string', 
            'rating' => 'required|integer|between:1,5',
        ]);


        Rating::create([
            'dish_name' => $request->dish_name,
            'rating' => $request->rating,
        ]);

        return redirect()->back()->with('success', 'Rating submitted successfully!');
    }


}
