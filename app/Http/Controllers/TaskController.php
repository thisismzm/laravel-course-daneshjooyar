<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        
        return view(
            'tasks.index',
            [
                'tasks' => $tasks
            ]
        );
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Task::create($request->all());

        return  redirect('/tasks')
                ->with('success', 'Task created successfully!');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $task->update($request->all());
        return redirect('/tasks')->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks')->with('success', 'Task deleted successfully!');
    }
}
