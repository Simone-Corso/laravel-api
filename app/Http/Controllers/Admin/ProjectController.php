<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('admin.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

        $project = new Project($request->only('name'));

        $project->save();


        $technologies = Technology::find($request->technologies);

        $project->technologies()->attach($technologies);


    return redirect()->route('admin.projects.show', $project->id);
}

    /**
     * Display the specified resource.
     */
    public function show(Project $project) {
        $technologies = Technology::all();
        return view('admin.show', compact('project', 'technologies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
{
    $data = $request->all();

    $project->title = $data['title'];
    $project->thumb = $data['thumb'];
    $project->description = $data['description'];
    $project->save();

    $technologies = $request->input('technologies', []);
    $project->technologies()->sync($technologies);

    return redirect()->route('admin.projects.show', $project->id);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        $project->delete();
    return redirect()->route('admin.projects.index');
    }
}
