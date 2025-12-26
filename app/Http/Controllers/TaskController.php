<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    public function create()
    {
        $statuses = Status::all();

        return view('task.create', compact('statuses'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'status_id' => '',
        ]);
        Task::create($data);

        return redirect()->route('task.index');
    }

    public function show(Task $task)
    {
        return view('task.show', compact('task'));
    }

    public function edit(Task $task)
    {
        $statuses = Status::all();

        return view('task.edit', compact('task', 'statuses'));
    }


    public function update(Task $task)
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'status_id' => 'string',
        ]);
        $task->update($data);

        return redirect()->route('task.show', $task->id);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('task.index');
    }
}
