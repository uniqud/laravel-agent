<?php

namespace Uniqud\LaravelAgent\Helpers;

use Uniqud\LaravelAgent\Http\Resources\Task as TaskResource;

class TaskRunner
{
    /**
     * Task Runner.
     * 
     * @param  string $task
     * @return \Uniqud\LaravelAgent\Http\Resources\Task
     */
    public function run($task)
    {
        // Do something ...

        return new TaskResource(
            [
                'task' => $task
            ]
        );
    }
}