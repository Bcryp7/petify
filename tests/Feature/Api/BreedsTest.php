<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Breed;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BreedsTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     *   @test
     *   @throws \Throwable
     *  @endpoint ['GET', '/api/breeds']
     */
    public function get_all_breeds()
    {
        $breed = $this->create(Breed::class);
        
        $response = $this->getJson(route('breeds.index'));
        $response->assertOk();
        $response->assertJson([
            'data' => [
                [
                    'id' => $breed->id,
                    'specie' => [
                        'id' => $breed->specie->id
                    ],
                    'name' => $breed->name,
                ]
            ]
        ]);
    }
}