<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", ["users" => [
            [
                "name" => "Esnur",
                "hobbies" => ["Coding", "Gaming"]
            ],
            [
                "name" => "Nurohman",
                "hobbies" => ["Coding", "Gaming"]
            ]
        ]])
        ->assertSeeInOrder([
            '.red', 
            'Esnur', 
            'Coding', 
            'Gaming', 
            'Nurohman', 
            'Coding', 
            'Gaming'
        ]);
    }
}