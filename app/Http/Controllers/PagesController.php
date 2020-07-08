<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task; //this will use the Task.php Model 

class PagesController extends Controller
{
    //Return the homepage to the route web.php
    public function index(){
        return view('index');
     }
     
     public function dashboard(){
        // $tasks =Task::all();
        $task_assign = Task::where('task_type', 'assigned')->orderby('created_at', 'asc')->paginate(2);
        // $task_personal = Task::where('task_type', 'personal')->take(5)->get();
        $task_personal = Task::where('task_type', 'personal')->orderby('created_at', 'asc')->paginate(2);
        $task_received = Task::where('task_type', 'received')->orderby('created_at', 'asc')->paginate(2);
        $task_group = Task::where('task_type', 'group')->take(5)->get();
        $task_completed = Task::where('task_status', 'completed')->get();
        $task_completed_count = count($task_completed);
        $serial = 0;
        $serial_1 = 0;
        $serial_2 = 0;
        $serial_3 = 0;
        $taskCount = Task::count();
        return view ('dashboard', compact('task_completed_count', 'task_group', 'serial_3', 'task_assign','taskCount', 'serial', 'task_personal', 'serial_1', 'task_received', 'serial_2'));
     }

    //  public function tasks(){
    //      return view ('tasks');
    //  }

     
}
