<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /* all tasks */
    public function all()
    {
        return view('tasks.tasks', ['tasks' => Task::all(),]);
    }



    /* individual task using id */
    public function show($id)
    {
        return view('tasks.show', [
            'task' => Task::findOrFail($id),
        ]);
    }


    public function create(){
        return view('tasks.create');
    }
   
}
