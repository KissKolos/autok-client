<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Car;

class CarControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_guest_can_view_cars_index()
    {
        Car::factory()->count(3)->create();

        $response = $this->get(route("cars"));

        $response->assertStatus(200);
    }

    /*public function test_authenticated_user_can_create_car()
    {
        
    }*/

   /* public function test_authenticated_user_can_update_car()
    {

    }*/

    public function test_authenticated_user_can_delete_maker()
    {
        $car = Car::factory()->create();

        $response = $this->get(route('cars.destroy', $car->id));

        $response->assertRedirect(route('cars'));
        $response->assertSessionHas('success', '');
        $this->assertDatabaseMissing('cars', ['id' => $car->id]);
    }
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
