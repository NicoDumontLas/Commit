<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        $tasks = $project->tasks;
        return view('tasks.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
        $validated = $request->validate([
            'name' => 'required',
            'status' => 'required',
            'date_fin' => 'required',
            'project_id' => 'required',
        ]);

        $task = $project->tasks()->create($validated);

        return redirect()->route('projects.show', $project);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project, Task $task)
    {
        return view('tasks.edit', compact('project', 'task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Project $project ,Task $task)
    {
        $validated = $request->validate([
            'name' => 'required',
            'status' => 'required',
            'date_fin' => 'required',
            'project_id' => 'required',
        ]);

        $task->update($validated);

        return redirect()->route('projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project,Task $task)
    {
        $task->delete();

        return redirect()->route('projects.show', $project);
    }
}
