<?php

namespace App\Http\Controllers;

use App\Models\Transmission;
use Illuminate\Http\Request;

class TransmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entities = Transmission::all();

        return view('transmissions.list', compact('entities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transmission = new Transmission(); 
        $transmission->name = $request->name;
        $transmission->save();
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
        $transmission = Transmission::find($id);
        return view('transmissions.edit', compact('transmission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transmission = Transmission::find($id);
        if ($transmission) {
            $transmission->name = $request->name;
            $transmission->save();
        }
        return redirect()->route('transmissions')->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transmission = Transmission::find($id);
        if ($transmission) {
            $transmission->delete();
        }
        return redirect()->route('transmissions')->with('success','');
    }
}