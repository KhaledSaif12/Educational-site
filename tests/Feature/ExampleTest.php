<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     * 
     * @return void
     */

     public function testBasicTest(){
        $response = $this->get('/');
        $response -> assertStatus(200);
     }
    

  
}
