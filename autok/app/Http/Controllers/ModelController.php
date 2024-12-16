<?php

namespace App\Http\Controllers;

use App\Models\Carmodel;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entities = Carmodel::all();

        return view('models.list', compact('entities'));
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
        $model = new Carmodel(); 
        $model->name = $request->name;
        $model->save();
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
        $model = Carmodel::find($id);
        return view('models.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Carmodel::find($id);
        if ($model) {
            $model->name = $request->name;
            $model->save();
        }
        return redirect()->route('models')->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Carmodel::find($id);
        if ($model) {
            $model->delete();
        }
        return redirect()->route('models')->with('success','');
    }
}