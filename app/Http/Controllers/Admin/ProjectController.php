<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Project::paginate(15);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' => ['required', 'unique:projects','min:3', 'max:255'],
            'goal' => ['required', 'min:10'],
            'link' => ['min:20'],
            'image' => ['image'],
        ]);
        if ($request->hasFile('image')){
            $img_path = Storage::put('uploads/projects', $request['image']);
            $data['image'] = $img_path;
        }

        $newProject = Project::create($data);
        return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:255', Rule::unique('projects')->ignore($project->id)],
            'goal' => ['required', 'min:10'],
            'link' => ['min:20'],
            'image'=> ['image'],
        ]);
        
        if ($request->hasFile('image')){
            Storage::delete($project->image);
            $img_path = Storage::put('uploads/projects', $request['image']);
            $data['image'] = $img_path;
        }

        $project->update($data);

        return redirect()->route('admin.projects.show', compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();
        //Storage::delete($project->image);
        return redirect()->route('admin.projects.index');

        
    }
}
