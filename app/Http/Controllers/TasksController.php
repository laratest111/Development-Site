<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use  Illuminate\Support\Facades\View;

class TasksController extends Controller
{
    //
    public function index()
    {
        //$tasks= DB::table('tasks')->latest()->get();  // to get all the record in an specific order
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }



    public function show($id)
    {
        ////// dd($id);
        //$task= DB::table('tasks')->find($id);
        //// dd($task);
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }
}
