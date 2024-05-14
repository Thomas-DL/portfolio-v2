<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($project_slug)
    {
        return view('project', compact('project_slug'));
    }
}
