<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

class ProjectTaskController extends Controller
{
    public function store(Project $project)
    {
        request()->validate(['description' => 'required']);
        
        $project->addTask(request('description'));

        return back();
    }

    public function update(Task $task)
    {   
        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }
}
