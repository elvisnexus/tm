<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

         // $tasks =Task::all();
         $task_assign = Task::where('task_type', 'assigned')
         ->orderby('created_at', 'asc')->paginate(2);
        // $task_personal = Task::where('task_type', 'personal')->take(5)->get();
        $task_personal = Task::where('task_type', 'personal')
            ->orderby('created_at', 'asc')->paginate(2);
        $task_received = Task::where('task_type', 'received')
            ->orderby('created_at', 'asc')->paginate(2);
        $task_group = Task::where('task_type', 'group')->take(5)->get();
        $task_completed = Task::where('task_status', 'completed')->get();
        $task_completed_count = count($task_completed);

        $task_due = Task::where('task_status', 'ongoing')->get();
        $task_due_count = count($task_due);

        $task_rejected = Task::where('task_status', 'rejected')->get();
        $task_rejected_count = count($task_rejected);

        $task_expired = Task::where('task_status', 'expired')->get();
        $task_expired_count = count($task_expired);

        $serial = 0;
        $serial_1 = 0;
        $serial_2 = 0;
        $serial_3 = 0;
        $taskCount = Task::count();
        
        return view('dashboard', compact('task_completed_count', 'task_group', 'serial_3', 'task_assign', 'taskCount', 'task_expired_count', 'serial', 'task_rejected_count', 'task_due_count', 'task_personal', 'serial_1', 'task_received', 'serial_2'));
        
        // return view('dashboard');
    }
}
