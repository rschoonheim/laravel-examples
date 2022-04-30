<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleResourceControllerTest extends TestCase
{
    /** @test */
    public function json_resource_translates_data(): void
    {
        $response = $this->get(route('example.resource.index'));
        $response->assertOk();
        $response->assertJson([
            'data' => [
                'slug' => 'slug_data',
                'title' => 'This is a translated string!',
            ]
        ]);
    }

    /** @test */
    public function json_resource_translates_data_when_content_type_header_isset(): void
    {
        $response = $this->get(route('example.resource.index'), [
            'Content-Type' => 'text/html; charset=UTF-8'
        ]);
        $response->assertOk();
        $response->assertJson([
            'data' => [
                'slug' => 'slug_data',
                'title' => 'This is a translated string!',
            ]
        ]);
    }
}
