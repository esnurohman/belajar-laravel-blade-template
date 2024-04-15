<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisableBladeTest extends TestCase
{
    public function testDisable()
    {
        $this->view("disabled", ["name" => "Esnur"])
        ->assertDontSeeText("Esnur")
        ->assertSeeText('Hello {{ $name }}');
    }
}