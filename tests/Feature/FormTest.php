<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "Esnur",
            "admin" => true
        ]])
        ->assertSee("checked")
        ->assertSee("Esnur")
        ->assertDontSee("readonly");

        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "Esnur",
            "admin" => false
        ]])
        ->assertDontSee("checked")
        ->assertSee("Esnur")
        ->assertSee("readonly");
    }
}