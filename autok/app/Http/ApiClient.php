<?php

namespace App\Http;

use Illuminate\Support\Facades\Http;

class ApiClient
{
    private $baseUri;

    public function __construct($baseUri = 'http://localhost:8001/api')
    {
        $this->baseUri = $baseUri;
    }

    // Fuels API: Get all fuels
    public function getFuels()
    {
        $response = Http::get($this->baseUri . '/fuels');
        $data = $response->json();
    
        return $data['fuels']; 
    }

    // Fuels API: Create new fuel type
    public function createFuel($name)
    {
        $response = Http::post($this->baseUri . '/fuels', [
            'name' => $name,
        ]);
        return $response->json();
    }

    // Fuels API: Update fuel type
    public function updateFuel($id, $name)
    {
        $response = Http::patch($this->baseUri . '/fuels/' . $id, [
            'name' => $name,
        ]);
        return $response->json();
    }

    // Fuels API: Delete fuel type
    public function deleteFuel($id)
    {
        $response = Http::delete($this->baseUri . '/fuels/' . $id);
        return $response->json();
    }


    public function getBodies()
    {
        $response = Http::get($this->baseUri . '/bodies');
        $data = $response->json();
    
        return $data['bodies']; 
    }

    public function createBody($name)
    {
        $response = Http::post($this->baseUri . '/bodies', [
            'name' => $name,
        ]);
        return $response->json();
    }

    public function updateBody($id, $name)
    {
        $response = Http::patch($this->baseUri . '/bodies/' . $id, [
            'name' => $name,
        ]);
        return $response->json();
    }

    public function deleteBody($id)
    {
        $response = Http::delete($this->baseUri . '/bodies/' . $id);
        return $response->json();
    }
}