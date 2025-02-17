<?php

namespace App\Http\Controllers;

use App\Models\TaskStatus;
use Illuminate\Http\Request;

class TaskStatusController extends Controller
{
    /**
     * Create the controller instance.
     */
    public function __construct()
    {
        $this->authorizeResource(TaskStatus::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskStatuses = TaskStatus::all();

        return view('task-status.index', compact('taskStatuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(TaskStatus $taskStatus)
    {
        return view('task-status.create', compact('taskStatus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, TaskStatus $taskStatus)
    {
        $dataRequest = json_decode($request->getContent(), true);
        $dataRequest = $request->validate([
            'name' => 'required|unique:task_statuses'
        ]);

        $taskStatus->fill($dataRequest);
        $taskStatus->save();

        return redirect()
            ->route('task_statuses.index')
            ->with('success', 'Статус задачи успешно создан!');
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(TaskStatus $taskStatus)
    // {
    //     return view('task-status.edit', compact('taskStatus'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskStatus $taskStatus)
    {
        return view('task-status.edit', compact('taskStatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaskStatus $taskStatus)
    {
        $dataRequest = $request->validate([
            'name' => 'required|unique:task_statuses'
        ]);

        $taskStatus->fill($dataRequest);
        $taskStatus->save();

        return redirect()
            ->route('task_statuses.index')
            ->with('success', 'Статус задачи успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskStatus $taskStatus)
    {
        if ($taskStatus->tasks()->exists()) {
            return back();
        }
        $taskStatus->delete();

        return redirect()
            ->route('task_statuses.index')
            ->with('success', 'Статус задачи успешно удален!');
    }
}
