<?php

Use App\Task;

Route::get('/', function ()
{
    $name = 'John Doe';

    return view('welcome', compact('name'));
});

Route::get('/tasks', function ()
{
    $tasks = Task::all();

    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id)
{
    $task = Task::find($id);

    return view('tasks.show', compact('task'));
});
