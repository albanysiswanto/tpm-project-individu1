<?php

namespace App\Http\Controllers;

use App\Models\RentCar;
use Illuminate\Http\Request;

class RentCarController extends Controller
{
    public function homepage()
    {
        $getAll = RentCar::all();
        return view('welcome', compact('getAll'));
    }

    public function create(){
        return view('createForm');
    }

    public function store(Request $request){
        RentCar::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return redirect('/');
    }
}
