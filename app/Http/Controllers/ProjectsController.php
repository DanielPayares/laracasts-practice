<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;
class ProjectsController extends Controller
{
    public function index() {
        $projects = Project::all();
        
        return view('projects.index', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }

    public function show(Project $project) {

        /* $project = Project::findOrFail($id);
 */
        
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project) {
        
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {
        
        $project->update(request(['title', 'description']));
        
        return redirect('/projects');
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect('/projects');
    }

    public function store() {

        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:10']
        ]);
        
        Project::create(request(['title', 'description']));

        return redirect('/projects');
    }
}
