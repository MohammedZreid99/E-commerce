<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        // User::factory()->create([
        //     'email'=>'test@test.com',
        //     'password' =>bcrypt('password')
        // ]);
        // $response = $this->post('/logi'  ,[
        //     'email'=>'test@test.com',
        //     'password' =>'password'
        // ]);
        // $response->assertStatus(302);
        // $response->assertRedirect('/');

    }
    
}
