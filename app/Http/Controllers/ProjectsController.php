<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){

        $projects = Project::all();

        //return view('welcome', compact('projects'));
        return redirect('home');
    }

    // public function signup(){
    //     return view('authentication/signup');
    // }

    // public function login(){
    //     return view('authentication/login');
    // }

    // public function logout(){
    //     return view('authentication/logout');
    // }

    // public function about(){
    //     return view('about');
    // }

    public function create(){
        return view('projects/create');
    }

    public function store(){

        // if(!isset($project))
        //     $project = new Project();

        // $project->title = request('title');
        // $project->description = request('description');

        // $project->save();

        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $attributes['owner_id'] = auth()->id();

        Project::create($attributes);

        return redirect('/projects/showall');
    }

    public function showall(){
        $projects = Project::all();

        //$this->authorize('update', $projects);
        
        return view('/projects/showall', compact('projects'));
    }

    public function show(Project $project){

        $this->authorize('update', $project);

        return view('projects/show', compact('project'));
    }

    public function edit(Project $project){ //example.com/projects/1/edit

        return view('projects/edit', compact('project'));
    }

    public function update(Project $project){

        // $project->title = request('title');
        // $project->description = request('description');

        // $project->save();

        $this->authorize('update', $project);

        $project->update(request(['title', 'description']));

        return redirect('/projects/showall');
    }

    public function destroy(Project $project){

        $this->authorize('update', $project);

        $project->delete();

        return redirect('/projects/showall');
    }
}
