<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Carmodel;
use App\Models\Maker;

class CarmodelControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_can_view_model_index()
    {
        Carmodel::factory()->count(3)->create();

        $response = $this->get(route('models'));

        $response->assertStatus(200);

    }

 /*   public function test_authenticated_user_can_create_model()
    {
        $modelData = ['name' => 'New Body'];

        $response = $this->put(route('carmodels.store'), $modelData);

        $response->assertRedirect(route('carmodels'));
        $response->assertSessionHas('success', '');
        $this->assertDatabaseHas('carmodels', $modelData);
    }*/
    
    public function test_authenticated_user_can_update_model()
    {
        $maker = Maker::factory()->create();
        $model = Carmodel::factory()->create();
        $updatedData = [
            'name' => 'Updated Car Model',
            'maker_id' => $maker->id,
        ];

        $response = $this->put(route('models.update', $model->id), $updatedData);

        $response->assertRedirect(route('models'));
        $response->assertSessionHas('success', '');
        $this->assertDatabaseHas('carmodels', $updatedData);
    }

    public function test_authenticated_user_can_delete_model()
    {
        $model = Carmodel::factory()->create();

        $response = $this->get(route('models.destroy', $model->id));

        $response->assertRedirect(route('models'));
        $response->assertSessionHas('success', '');
        $this->assertDatabaseMissing('carmodels', ['id' => $model->id, 'name' => $model->name]);
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
