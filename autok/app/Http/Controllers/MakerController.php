<?php

namespace App\Http\Controllers;

use App\Models\Maker;
use Illuminate\Http\Request;

class MakerController extends Controller
{
    public function models(string $makerID){
        $maker = Maker::find($makerID);
        $models=$maker->models;
        $result['data']= $models;
        return response()->json($result);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $makers = Maker::all();

        return view('makers.list', compact('makers'));
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
        $maker = new Maker(); 
        $maker->name = $request->name;
        $maker->save();
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
        $maker = Maker::find($id);
        return view('makers.edit', compact('maker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $maker = Maker::find($id);
        if ($maker) {
            $maker->name = $request->name;
            $maker->save();
        }
        return redirect()->route('makers')->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $maker = Maker::find($id);
        if ($maker) {
            $maker->delete();
        }
        return redirect()->route('makers')->with('success','');
    }
}

