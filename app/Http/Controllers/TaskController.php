<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'], 
            'start_time' => ['required', 'regex:/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/'], 
            'end_time' => ['required', 'regex:/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/'],
        ], [
            'start_time.regex' => 'The start time must be in HH:MM format.', 
            'end_time.regex' => 'The end time must be in HH:MM format.',
        ]);

        Task::create([
            'title' => $request->title,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created');
    }
}
