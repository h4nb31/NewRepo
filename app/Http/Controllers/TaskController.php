<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{

    public function index()
    {
        //
        $tasks = Task::all();
        return  view('ToDoListMain', compact('tasks'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'task' => 'required',
            'description' => 'required'
        ]);

        Task::created($data);
        return back();
    }


    public function show(Task $task)
    {
        //
    }


    public function edit(Task $task)
    {
        //
    }


    public function update(Request $request, Task $task)
    {
        //
    }


    public function destroy(Task $task)
    {
        //
        $task->delete();
        return back();
    }
}
