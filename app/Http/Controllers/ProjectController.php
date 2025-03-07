<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){

        $projects = Project::all();
        return view('index', compact('projects'));
    }

    public function destroy(){
        $id = request('id');
        $project = Project::find($id);
        $project->delete();
    }
}
