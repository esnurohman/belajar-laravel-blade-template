<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view("include-condition", ["user" =>
            [
                "name" => "Esnur",
                "owner" => true
            ]
        ])
        ->assertSeeText("Selamat Datang Owner")
        ->assertSeeText("Selamat Datang Esnur");

        $this->view("include-condition", ["user" =>
            [
                "name" => "Esnur",
                "owner" => false
            ]
        ])
        ->assertDontSeeText("Selamat Datang Owner")
        ->assertSeeText("Selamat Datang Esnur");
    }
}