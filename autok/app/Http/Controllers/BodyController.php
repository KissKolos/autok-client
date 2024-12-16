<?php

namespace App\Http\Controllers;

use App\Models\Body;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\ApiClient;

class BodyController extends Controller
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
       $entities = $this->apiClient->getBodies();
        return view('bodies.list', compact('entities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bodies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = $this->apiClient->createBody($request->name);
        return redirect()->route('bodies')->with('success', 'Body added successfully!');
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
        return view('bodies.edit', compact('body'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->apiClient->updateBody($id);

        return redirect()->route('bodies')->with('success','Body updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->apiClient->deleteBody($id);
        return redirect()->route('bodies')->with('success', 'Body deleted successfully!');
    }
}