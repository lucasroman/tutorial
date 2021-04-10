<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class todoListTest extends TestCase
{
    // Must exist todo list route and view
    public function testItCanSeeToDoListPage()
    {
        $response = $this->get('/todo');
        // Check route exist
        $response->assertOk();
        // Check view exist
        $response->assertViewIs('todo.todoList');
    }

    // 2. Added item should be seen after saving.
}
