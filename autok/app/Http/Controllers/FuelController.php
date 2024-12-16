<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\ApiClient;

class FuelController extends Controller
{
    private $apiClient;

    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entities = $this->apiClient->getFuels();
        return view('fuels.list', compact('entities'));
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
        $request->validate([
            'name' => 'required|min:3|max:50',
        ]);

        $response = $this->apiClient->createFuel($request->name);
        return redirect()->route('fuels')->with('success', 'Fuel added successfully!');
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
        return view('fuels.edit', compact('fuel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=> 'required|min:3|max:50',
        ],[
            'min'=> 'Minimum 3 karakter!',
            'max'=> 'Maximum 50 karakter!',
            'required' => 'kötelező mező'
        ]) ;  
        $this->apiClient->updateFuel($id);

        return redirect()->route('fuels')->with('success', 'Fuel updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->apiClient->deleteFuel($id);
        return redirect()->route('fuels')->with('success', 'Fuel deleted successfully!');
    }
}