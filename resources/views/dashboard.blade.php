@extends('layouts.app')


@section('title', 'TM :: Dashboard')

{{-- @section('taskCount', {{ count($tasks) }}) --}}

@section('content')

<!--CONTENT-->
<div class="content">
<div class="container-fluid">
  <!-- your content here -->
  
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

    <!--ALL TASKS STATISTICS-->
      @yield('content')
    <!--ALL TASKS STATISTICS-->
  <!-- end of content-->
</div>

</div>

 <div class="row">
                    <div class="col-lg-6">
                      <div class="row">      
                        <!--2-->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                              <div class="card-icon">
                                <a href="#" style="color: white;"><i class="material-icons">assignment_turned_in</i></a>
                              </div>
                              <p class="card-category"><a href="#" style="color: gray; font-weight: bold;">Completed Tasks</a></p>
                              <h3 class="card-title">{{ $task_completed_count }}</h3>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <a href="#" style="color:gray;"><i class="material-icons">done_all</i>View tasks marked as completed</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--2-->
      
                        <!--3-->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="card card-stats">
                            <div class="card-header card-header-info card-header-icon">
                              <div class="card-icon">
                                <a href="#" style="color: white;"><i class="material-icons">date_range</i></a>
                              </div>
                              <p class="card-category"><a href="#" style="color: gray; font-weight: bold;">Due Tasks</a></p>
                              <h3 class="card-title">12</h3>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <a href="#" style="color:gray;"><i class="material-icons">alarm</i>Tasks due in 0-5 days</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--3-->
      
                        <!--4-->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="card card-stats">
                            <div class="card-header card-header-danger card-header-icon">
                              <div class="card-icon">
                                <a href="#" style="color: white;"><i class="material-icons">assignment_late</i></a>
                              </div>
                              <p class="card-category"><a href="#" style="color: gray; font-weight: bold;">Rejected Tasks</a></p>
                              <h3 class="card-title">3</h3>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <a href="#" style="color:gray;"><i class="material-icons">event_busy</i>View rejected tasks</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--4-->
      
                        <!--5-->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="card card-stats">
                            <div class="card-header card-header-primary card-header-icon">
                              <div class="card-icon">
                                <a href="#" style="color: white;"><i class="material-icons">assessment</i></a>
                              </div>
                              <p class="card-category"><a href="#" style="color: gray; font-weight: bold;">Expired Tasks</a></p>
                              <h3 class="card-title">5</h3>
                            </div>
                            <div class="card-footer">
                              <div class="stats">
                                <a href="#" style="color: gray;"><i class="material-icons">local_offer</i>View all failed tasks</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--5-->
                      </div>
                        
                    </div>
                  <!--ALL TASKS STATISTICS -->
      
      
                    <!--TASKLIST TABLE-->
                    <div class="col-lg-6 col-md-12">
                      <div class="card">
                        <div class="card-header card-header-tabs card-header-info">
                          <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                              <span class="nav-tabs-title">Tasklist:</span>
                              <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                  <a class="nav-link active" href="#personal" data-toggle="tab">
                                    <i class="material-icons">assignment_ind</i> Personal
                                    <div class="ripple-container"></div>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#received" data-toggle="tab">
                                    <i class="material-icons">done_all</i> Received
                                    <div class="ripple-container"></div>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#assigned" data-toggle="tab">
                                    <i class="material-icons" >assignment</i> Assigned
                                    <div class="ripple-container"></div>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#groups" data-toggle="tab">
                                    <i class="material-icons">supervisor_account</i> Group
                                    <div class="ripple-container"></div>
                                  </a>
                                </li>
                                
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="tab-content">
                            <div class="tab-pane active" id="personal">
                              <p style="font-weight: bold;">Self-assigned tasks (ordered by most due)</p>
                              <table class="table">
                                <tbody>
                                  @if (count($task_personal) > 0)
                                        @foreach ( $task_personal as $task)
                                          <tr>
                                            {{-- <td>{{ $serial_1 = $serial_1 + 1 }} --}}
                                            
                                            <td>{{ $task ->title }}</td>
                                            <td style="max-width: 150px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{ $task ->description }}</td>
                                            <td>
                                              <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="View details" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">visibility</i>
                                              </a>
                                              <a href="/tasks/{{ $task->id }}/edit" type="button" rel="tooltip" title="Edit Task" class="btn btn-default btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                              </a>
                                              <a href="/tasks/{{ $task->id }}/destroy" type="button" rel="tooltip" title="Delete Task" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">delete_forever</i>
                                              </a>
                                              <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="Mark as done" class="btn btn-info btn-link btn-sm">
                                                <i class="material-icons">done</i>
                                              </a>
                                            </td>
                                          </tr>
                                        @endforeach
                                        {{ $task_personal ->links() }}

                                      @else 
                                        <p>No tasks found.</p>                                    
                                  @endif

                                  
                                </tbody>
                              </table>

                              {{-- @if(count($task_personal) > 1)
                                    <a href="tasks/personal">View all</a>
                                  @endif --}}
                            </div>

                            <div class="tab-pane" id="received">
                              <p style="font-weight: bold;">Tasks assigned to you.</p>
                              <table class="table">
                                <tbody>
                                  @if (count($task_received) > 0)
                                        @foreach ( $task_received as $task)
                                          <tr>
                                            {{-- <td>{{ $serial_2 = $serial_2 + 1 }} --}}
                                            {{-- <td>{{ $task ->id }}</td> --}}
                                            <td>{{ $task ->title }}</td>
                                            <td style="max-width: 150px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{ $task ->description }}</td>
                                            <td>
                                              <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="View details" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">visibility</i>
                                              </a>
                                              <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="Request extension" class="btn btn-warning btn-link btn-sm">
                                                <i class="material-icons">forward_10</i>
                                              </a>
                                              <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="Mark as done" class="btn btn-info btn-link btn-sm">
                                                <i class="material-icons">done</i>
                                              </a>
                                            </td>
                                          </tr>
                                        @endforeach
                                        {{ $task_received ->links() }}

                                      @else 
                                        <p>No tasks found.</p>                                    
                                      @endif
                                </tbody>
                              </table>
                              
                            </div>

                            <div class="tab-pane" id="assigned">
                              <p style="font-weight: bold;">Tasks you assigned to others</p>
                              <table class="table">
                                <tbody>

                                  {{-- @if( $tasks->task_type->'assigned') --}}
                                      @if (count($task_assign) > 0)
                                        @foreach ( $task_assign as $task)
                                          <tr>
                                            {{-- <td>{{ $serial = $serial + 1 }} --}}
                                            {{-- <td>{{ $task ->id }}</td> --}}
                                            <td>{{ $task ->title }}</td>
                                            <td style="max-width: 150px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{ $task ->description }}</td>
                                            <td>
                                              <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="View details" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">visibility</i>
                                              </a>
                                              <a href="/tasks/{{ $task->id }}/edit" type="button" rel="tooltip" title="Edit Task" class="btn btn-default btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                              </a>
                                              <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="Revoke Task" class="btn btn-warning btn-link btn-sm">
                                                <i class="material-icons">assignment_returned</i>
                                              </a>
                                              {{-- <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="Mark as done" class="btn btn-info btn-link btn-sm">
                                                <i class="material-icons">done</i>
                                              </a> --}}
                                            </td>
                                          </tr>
                                        @endforeach
                                        {{ $task_assign ->links() }}

                                      @else 
                                        <p>No tasks found.</p>                                    
                                      @endif

                                </tbody>
                              </table>
                            </div>
                            
                            <div class="tab-pane" id="groups">
                              <p style="font-weight: bold;">Group tasks you were added</p>
                              <table class="table">
                                <tbody>
                                  @if (count($task_group) > 0)
                                        @foreach ( $task_group as $task)
                                          <tr>
                                            {{-- <td>{{ $serial_3 = $serial_3 + 1 }} --}}
                                            {{-- <td>{{ $task ->id }}</td> --}}
                                            <td>{{ $task ->title }}</td>
                                            <td style="max-width: 150px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{ $task ->description }}</td>
                                            <td>
                                              <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="View details" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">visibility</i>
                                              </a>
                                              <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="Request extension" class="btn btn-warning btn-link btn-sm">
                                                <i class="material-icons">forward_10</i>
                                              </a>
                                              <a href="/tasks/{{ $task ->id }}" type="button" rel="tooltip" title="Mark as done" class="btn btn-info btn-link btn-sm">
                                                <i class="material-icons">done</i>
                                              </a>
                                            </td>
                                          </tr>
                                        @endforeach

                                      @else 
                                        <p>No tasks found.</p>                                    
                                      @endif
                                </tbody>
                              </table>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--TASKLIST TABLE-->
                              
                  </div>

@endsection




