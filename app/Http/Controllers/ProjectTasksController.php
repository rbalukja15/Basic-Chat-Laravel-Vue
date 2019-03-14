<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    // public function update(Task $task){

    //     //Different ways to update the task


    //     //first way
    //     // if(request()->has('completed')){
    //     //     $task->complete();
    //     // }
    //     // else{
    //     //     $task->incomplete();
    //     // }

    //     //Second Way
    //     //request()->has('completed') ? $task->complete() : $task->incomplete();


    //     //Third Way
    //     $method = request()->has('completed') ? 'complete' : 'incomplete';
    //     $task->method();

    //     //Fourth
    //     //$task->complete(request()->has('completed'));

    //     //Fifth
    //     // $task->update([
    //     //     'completed' => request()->has('completed')
    //     // ]);

    //     return back();
    // }

    public function store(Project $project){

        $attributes = request()->validate([
            'description' => 'required'
        ]);

        $project->addTask($attributes);

        return back();
    }
}
