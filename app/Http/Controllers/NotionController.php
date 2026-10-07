<?php

namespace App\Http\Controllers;

use App\Models\Notion;
use App\Models\Section;
use App\Models\Subject;
use Illuminate\Http\Request;

class NotionController extends Controller
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
    public function create(Subject $subject)
    {
        $sections = $subject->sections;
        return view('notions.create' ,compact('subject'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Subject $subject)
    {
        $validated = $request->validate([
            'name' => 'required',
            'note' => 'required',
            'ressource' => 'required',
            'status' => 'required',
            'section_name' => 'required'
        ]);

        $section = $subject->sections()->firstOrCreate([
            'name' => $validated['section_name'],
        ]);

        $notion = $section->notions()->create([
            'name' => $validated['name'],
            'note' => $validated['note'],
            'ressource' => $validated['ressource'],
            'status' => $validated['status'],
        ]);

        return redirect()->route('subjects.show',$subject)->with('success', 'Notion created!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject, Notion $notion)
    {
        return view('notions.edit', compact('subject','notion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject, Notion $notion)
    {
        $validated = $request->validate([
            'name' => 'required',
            'note' => 'required',
            'ressource' => 'required',
            'status' => 'required',
            'section_name' => 'required'
        ]);

        $section = $subject->sections()->firstOrCreate([
            'name' => $validated['section_name'],
        ]);

        $notion->update([
            'name' => $validated['name'],
            'note' => $validated['note'],
            'ressource' => $validated['ressource'],
            'status' => $validated['status'],
            'section_id' => $section->id,
        ]);

        return redirect()->route('subjects.show', $subject)->with('success', 'Notion updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject, Notion $notion)
    {
        $notion->delete();

        return redirect()->route('subjects.show', $subject)->with('success', 'Notion deleted!');
    }
}
