@extends('layouts.app')

@section('title', 'TM :: Tasks')



@section('content')
    <!--New Task Button-->
    
    <div>
      <span>Task Count</span>
      <a href="/tasks" class="btn btn-warning btn-round" style="color: white;">
        <i class="material-icons" style="color: white;"></i>{{ $taskCount }}
      </a>

      {{-- <button class="btn btn-info btn-round" data-toggle="modal" data-target="#newTaskModal">
        <i class="material-icons">post_add</i> Personal Task
      </button> --}}
      <a href="/tasks/create" class="btn btn-info btn-round">
        <i class="material-icons">post_add</i> Personal Task
    </a>

      <button class="btn btn-info btn-round" data-toggle="modal" data-target="#assignTaskModal">
        <i class="material-icons">add_to_photos</i> Assign Task
      </button>
    </div>
    <!--New Task Button End-->
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title ">Tasks Table</h4>
              <p class="card-category">This table populates all your tasks (showing 5 tasks per page & ordered by most recent)</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    {{-- <th>Serial</th> --}}
                    <th>Title</th>
                    <th>Description</th>
                    <th>TaskType</th>
                    <th>Assigned By</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th style="text-align: center;">Action(s)</th>
                  </thead>
                  <tbody>
                    @if (count($tasks) > 0)
                      @foreach ( $tasks as $task)
                      <tr>
                        
                          {{-- <td>{{ $serial = $serial + 1 }} --}}
                          {{-- <td>{{ $task->id }}</td> --}}
                          <td>{{ $task ->title }}</td>
                          <td style="max-width: 50px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{ $task ->description }}</td>
                          <td>{{ $task ->task_type }}</td>
                          <td>{{ $task ->assigned_by }}</td>
                          <td>{{ $task ->due_date }}</td>
                          <td>{{ $task ->task_status }}</td>
                          <td style="text-align: center;">
                            <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="View Details" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">visibility</i>
                            </a>
                            @if (($task->task_type)=='Personal')
                              <a href="/tasks/{{ $task->id }}/destroy" type="button" rel="tooltip" title="Delete Task" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">delete_forever</i>
                              </a>
                            @endif
                            
                            @if (($task->task_type)=='Received')
                              <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="Request Extension" class="btn btn-warning btn-link btn-sm">
                                <i class="material-icons">forward_10</i>
                              </a>
                            @endif

                            @if (($task->task_type)=='Assigned')
                              <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="Revoke Task" class="btn btn-warning btn-link btn-sm">
                                <i class="material-icons">assignment_returned</i>
                              </a>
                            @endif
                          </td>
                        
                      </tr>
                      @endforeach
                      {{ $tasks ->links() }}
                      
                    @else 
                      <p>No tasks availble.</p>
                    @endif                    
                  
                  </tbody>
                  
                </table>
                {{ $tasks ->links() }}
              </div>
            </div>
          </div>
        </div>      
    </div>    
    <div class="navbar-wrapper">
      <a href="/dashboard" class="btn btn-md btn-info navbar-brand" href="#"><i class="material-icons">fast_rewind</i>Dashboard</a>
    </div>  
@endsection