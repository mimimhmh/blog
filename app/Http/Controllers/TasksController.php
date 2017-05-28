<?php

namespace App\Http\Controllers;

Use App\Task;

class TasksController extends Controller
{

    public function index() {

        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    //route model binding
    public function show(Task $task) {

        return view('tasks.show', compact('task'));
    }
}
