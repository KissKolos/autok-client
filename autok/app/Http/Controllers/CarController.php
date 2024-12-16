<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\Maker;
use App\Models\Carmodel;
use App\Models\Color;
use App\Models\Fuel;
use App\Models\Body;
use App\Models\Transmission;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entities = Car::all();

        return view('cars.list', compact('entities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $makers = Maker::all();
        $models = [];
        $colors = Color::all();
        $fuels = Fuel::all();
        $bodies = Body::all();
        $transmissions = Transmission::all();

        return view('cars.create', compact('makers','models', 'colors', 'fuels', 'bodies', 'transmissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|min:3|max:50',
        ]) ;  
        $car = new Car(); 
        $car->name = $request->name;
        $car->maker = $request->maker;

        $car->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::find($id);
        if ($car) {
            $car->delete();
        }
        return redirect()->route('cars')->with('success','');
    }
}