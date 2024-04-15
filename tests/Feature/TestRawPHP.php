<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestRawPHP extends TestCase
{
    public function testPHP()
    {
        $this->view("php", [])
        ->assertSeeText("Esnur")
        ->assertSeeText("Indonesia");
    }
}