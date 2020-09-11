<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task; //this will use the Task.php Model 

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        // $tasks =Task::all(); // get all tasks using the Task.php Model
        $tasks = Task::orderBy('created_at', 'desc')->paginate(5);
        $taskCount = Task::count();
        $serial = 0;
        // return view ('dashboard')->with('tasks', $tasks, $taskCount); //passing tasks table data to tasks view 
        return view('task.tasks', compact('tasks', 'taskCount', 'serial')); //this loads the view tasks.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $taskCount = Task::count();
        return view('task.taskcreate', compact('taskCount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'Title' => 'required',
        'Description' => 'required',
        'due_date' => 'required'
        ]);

        //Create Task
        $task = new Task;
        $task->title = $request->input('Title');
        $task->description = $request->input('Description');
        $task->task_type = "Personal";
        $task->assigned_by = "Self";
        $task->task_status = "Ongoing";
        $task->due_date = $request->input('due_date');
        $task->save();

        return redirect('/tasks')->with('success', 'Task Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $task = Task::find($id);
        $taskCount = Task::count();
        // return $task;
        return view('task.taskview', compact('task', 'taskCount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        $taskCount = Task::count();
        return view('task.taskedit', compact('task', 'taskCount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Title' => 'required',
            'Description' => 'required',
            'due_date' => 'required'
            ]);
    
            //Create Task
            $task = Task::find($id);
            $task->title = $request->input('Title');
            $task->description = $request->input('Description');
            $task->task_type = "Personal";
            $task->due_date = $request->input('due_date');
            $task->save();
    
            return redirect('/tasks')->with('success', 'Task Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks')->with('success', 'Task Deleted!');
    }
}
