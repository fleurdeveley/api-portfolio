<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('competences')->get();
        
        return response()->json($projects);
    }

    public function store(Request $request) { }

    public function show(Project $project) { }

    public function update(Request $request, Project $project) { }

    public function destroy(Project $project) { }
}
