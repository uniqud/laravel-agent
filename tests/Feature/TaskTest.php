<?php

namespace Uniqud\LaravelAgent\Tests\Feature;

use Uniqud\LaravelAgent\Tests\TestCase;

class TaskTest extends TestCase
{
   
    /**
     * @group feature_test
     * @see   TaskController::run()
     */
    public function test_it_runs_task_properly()
    {
        $params = [
            'task' => 'some'
        ];
        $response = $this
            ->withHeaders(
                [
                    'Accept' => 'application/json'
                ]
            )
            ->post('uniqud/application/run', $params);

        $response->assertStatus(200);
        $response->assertJsonStructure(
            [
                'data' => [
                    'task'
                ]
            ]
        );
        $response->assertJson(
            [
                'data' => $params
            ]
        );
    }
}
