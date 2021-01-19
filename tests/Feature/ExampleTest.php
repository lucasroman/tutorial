<?php
/**
* IMPORTANT: Don't test React component here!
* The react component need time to be created but phpunit is too fast and
* run test before than React create the component, therefore will fail always.
* Instead run front-end tests with Dusk, doing: php artisan dusk
*/
 namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
