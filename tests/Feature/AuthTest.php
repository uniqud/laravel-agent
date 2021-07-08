<?php

namespace Uniqud\LaravelAgent\Tests\Feature;

use Uniqud\LaravelAgent\Tests\TestCase;

class AuthTest extends TestCase
{
   
    /**
     * @group feature_test
     * @see   AuthController::getToken()
     */
    public function test_it_gets_token_properly()
    {
        $response = $this
            ->withHeaders(
                [
                    'Accept' => 'application/json'
                ]
            )
            ->get('uniqud/application/get-token');

        $response->assertStatus(200);
        $response->assertJsonStructure(
            [
                'data' => [
                    'token'
                ]
            ]
        );
    }
}
