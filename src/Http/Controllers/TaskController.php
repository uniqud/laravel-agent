<?php

namespace Uniqud\LaravelAgent\Http\Controllers;

use Uniqud\LaravelAgent\Http\Requests\Task as TaskRequest;

class TaskController extends Controller
{   
    /**
     * Run the specified task.
     *
     * @return mixed
     */
    public function run(TaskRequest $request)
    {
        $data = $request->validated();
        $class = config('laravel-agent.task_runner_class', \Uniqud\LaravelAgent\Helpers\TaskRunner::class);
        return (new $class())->run($data['task']);
    }
}
