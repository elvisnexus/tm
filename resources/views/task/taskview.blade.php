@extends('layouts.app')


@section('title', 'TM :: Tasks')

@section('content')

    <!--New Task Button-->
    
    <div>
      <span>Task Count</span>
      <a href="/tasks" class="btn btn-warning btn-round" style="color: white;">
        <i class="material-icons" style="color: white;"></i>{{ $taskCount }}
      </a>

      <a href="/tasks/create" class="btn btn-info btn-round">
        <i class="material-icons">post_add</i> Personal Task
      </a>

      <button class="btn btn-info btn-round" data-toggle="modal" data-target="#assignTaskModal">
        <i class="material-icons">add_to_photos</i> Assign Task
      </button>
    </div>
    <!--New Task Button End-->



            <div class="card card-nav-tabs col-md-6">
                <h4 class="card-header card-header-info">Task Details</h4>
                <div class="card-body">
                  <h6 class="" style="display: inline; font-weight:bold; text-transform:none;">Title: </h6><span>{{ $task->title }}</span><br>
                  <hr>
                  <h6 class="" style="display: inline; font-weight:bold; text-transform:none;">Description: </h6><span>{{ $task->description }}</span><br>
                  <hr>
                  <h6 class="" style="display: inline; font-weight:bold; text-transform:none;">Date Created: </h6><span>{{ $task->created_at }}</span><br>
                  <hr>
                  <h6 class="" style="display: inline; font-weight:bold; text-transform:none;">Due Date: </h6><span>{{ $task->due_date }}</span><br>
                  <hr>
                  <h6 class="" style="display: inline; font-weight:bold; text-transform:none;">Status: </h6><span>{{ $task->task_status }}</span><br>
                  <hr>
                  {{-- <h6 class="" style="display: inline; font-weight:bold; text-transform:none;">Assigned To: </h6><span>{{ $task->task_status }}</span><br>
                  <hr> --}}
                  <form action="TasksController@destroy" method="POST">
                      <div class="dropdown text-center">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Select Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          @if(($task->task_type)=='Personal' || ($task->task_type) == 'Received')
                            <a class="dropdown-item" href="#">Mark as Completed</a>
                          @endif
                          
                          @if(($task->task_type) == 'Received')
                            <a class="dropdown-item" href="#">Request Time Extension</a>
                          @endif

                          @if(($task->task_type)=='Personal')
                            <a class="dropdown-item" href="/tasks/{{ $task->id }}/destroy" name="Submit">Delete</a>
                          @endif

                          @if(($task->task_type)=='Personal' || ($task->task_type)=='Assigned')
                            <a class="dropdown-item" href="/tasks/{{ $task->id }}/edit">Edit</a>
                          @endif

                          @if(($task->task_type)=='Assigned')
                            <a class="dropdown-item" href="#">Drop/Unassign</a>
                          @endif

                        </div>
                      </div>
                  </form>
                 
                </div>
              </div>

              <div class="navbar-wrapper">
                <a href="/dashboard" class="btn btn-md btn-info navbar-brand" href="#"><i class="material-icons">fast_rewind</i>Dashboard</a>
              </div> 

              @endsection

