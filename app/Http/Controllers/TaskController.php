<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        // retrieve all of the tasks when we visit the homepage...
        // $tasks = Task::all();
        // now show to desending...
        $tasks = Task::orderBy('id','DESC') -> get(); 
        
        // this fun is for checking ... if data is coming or not
        //return dd($tasks);
        
        
        // display / render all of the tasks that we have. 
       
        // pass the data to our index view.
        return view('tasks.index',['tasks' => $tasks,]);
    }


    public function create(){
        return view('tasks.create');
    }

    // handle the tasks submission data
    public function store(){
        $task = Task::create([
            'description' => request('description'),
        ]);

        
       
        // return to the homepage when task is created ...
        return redirect('/');
        //return dd($task);
    }
}
