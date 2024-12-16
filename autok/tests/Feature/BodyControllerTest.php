<?php

namespace Tests\Feature;

use App\Models\Body;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BodyControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_can_view_body_index()
    {
        Body::factory()->count(3)->create();

        $response = $this->get(route('bodies'));

        $response->assertStatus(200);

    }

 /*   public function test_authenticated_user_can_create_body()
    {
        $bodyData = ['name' => 'New Body'];

        $response = $this->put(route('bodies.store'), $bodyData);

        $response->assertRedirect(route('bodies'));
        $response->assertSessionHas('success', '');
        $this->assertDatabaseHas('bodies', $bodyData);
    }*/
    
    public function test_authenticated_user_can_update_body()
    {
        $body = Body::factory()->create();
        $updatedData = ['name' => 'Updated Body'];

        $response = $this->put(route('bodies.update', $body->id), $updatedData);

        $response->assertRedirect(route('bodies'));
        $response->assertSessionHas('success', ''); 
        $this->assertDatabaseHas('bodies', $updatedData);
    }

    public function test_authenticated_user_can_delete_body()
    {
        $body = Body::factory()->create();

        $response = $this->get(route('bodies.destroy', $body->id));

        $response->assertRedirect(route('bodies'));
        $response->assertSessionHas('success', '');
        $this->assertDatabaseMissing('bodies', ['id' => $body->id]);
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
