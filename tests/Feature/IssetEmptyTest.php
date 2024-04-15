<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetEmpty()
    {
        $this->view("issetempty", [])
        ->assertDontSeeText("Hello")
        ->assertSeeText("I don't have hobbies", false);

        $this->view("issetempty", ["name" => "Esnur"])
        ->assertSeeText("Hello, my name is Esnur")
        ->assertSeeText("I don't have hobbies", false);

        $this->view("issetempty", ["name" => "Esnur", "hobbies" => ["Coding"]])
        ->assertSeeText("Hello, my name is Esnur")
        ->assertDontSeeText("I don't have hobbies", false);
    }
}