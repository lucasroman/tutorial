<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListBackTest extends TestCase
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
}
