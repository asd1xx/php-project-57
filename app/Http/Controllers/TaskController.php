<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Create the controller instance.
     */
    public function __construct()
    {
        $this->authorizeResource(Task::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();

        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Task $task)
    {
        return view('task.create', compact('task'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Task $task)
    {
        $dataRequest = json_decode($request->getContent(), true);
        $dataRequest = $request->validate([
            'name' => 'required|unique:task_statuses'
        ]);

        $task->fill($dataRequest);
        $task->save();

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Задача успешно создана!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('task.edit', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('task.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $dataRequest = $request->validate([
            'name' => 'required|unique:task_statuses',
            'description' => 'string|max:500|nullable',
            'status_id' => 'required|exists:task_statuses,id',
            'assigned_to_id' => 'nullable|exists:users,id',
        ]);

        $task->fill($dataRequest);
        $task->save();

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Задача успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
