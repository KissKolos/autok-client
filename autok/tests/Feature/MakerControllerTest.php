<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Maker;

class MakerControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_guest_can_view_maker_index()
    {
        Maker::factory()->count(3)->create();

        $response = $this->get(route("makers"));

        $response->assertStatus(200);
    }

  /*  public function test_authenticated_user_can_create_maker()
    {
        $makerData = ['name' => 'New Maker'];

        $response = $this->post(route('makers.store'), $makerData);

        $response -> assertRedirect(route('makers'));

        $this->assertDatabaseHas('makers', $makerData);
        $response->assertSessionHas('success','New Maker sikeresen létrehozva');
    }*/

    public function test_authenticated_user_can_update_maker()
    {
        $maker = Maker::factory()->create();
        $updatedData = ['name' => 'Updated Maker'];

        $response = $this->put(route('makers.update', $maker->id), $updatedData);

        $response->assertRedirect(route('makers'));
        $response->assertSessionHas('success', ''); 
        $this->assertDatabaseHas('makers', $updatedData);
    }

    public function test_authenticated_user_can_delete_maker()
    {
        $maker = Maker::factory()->create();

        $response = $this->get(route('makers.destroy', $maker->id));

        $response->assertRedirect(route('makers'));
        $response->assertSessionHas('success', '');
        $this->assertDatabaseMissing('makers', ['id' => $maker->id]);
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
