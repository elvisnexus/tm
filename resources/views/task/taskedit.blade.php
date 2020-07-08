@extends('layouts.app')


@section('title', 'TM :: Tasks')

@section('content')

    <!--New Task Button-->
    
    <div class="mb-3">
        <span>Task Count</span>
        <a href="/tasks" class="btn btn-warning btn-round" style="color: white;">
          <i class="material-icons" style="color: white;"></i>{{ $taskCount }}
        </a>
        {{-- <a href="/tasks/create" class="btn btn-info btn-round" data-toggle="modal" data-target="#newTaskModal">
            <i class="material-icons">post_add</i> Personal Task
        </a> --}}
  
        <button class="btn btn-info btn-round" data-toggle="modal" data-target="#assignTaskModal">
          <i class="material-icons">add_to_photos</i> Assign Task
        </button>
    </div>
    <!--New Task Button End-->
    <div class="card card-nav-tabs col-md-4">
        <h4 class="card-header card-header-info">Edit Personal Task</h4>
        <div class="card-body">
            <p class="card-text">::All fields are required::</p>

                {!! Form::open(['action' => ['TasksController@update', $task->id], 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="">
                        <div class="form-group" style="background-color:white; padding:5px;">
                            {{-- {{ Form::label('title', 'Title') }} --}}
                            {{ Form::text('Title', $task->title, ['class' => 'form-control', 'placeholder' => 'Title *']) }}
                        </div>
                        <div class="form-group" style="background-color: white; padding:5px;">
                            {{-- {{ Form::label('desc', 'Description') }} --}}
                            
                            {{ Form::textarea('Description', $task->description, ['class' => 'form-control', 'placeholder' => 'Description *']) }}
                        </div>
                        <div>
                            {{ Form::label('due_date', '* Due Date:') }}
                            {{ Form::date('due_date', $task->due_date), ['class' =>'form-control mb-3'] }}
                        </div>
                        {{ Form::hidden('_method', 'PUT') }}
                        {{ Form::submit('Submit', ['class'=>'btn btn-info mt-3']) }}
                    
                    </div>
                    </div>
                    
                    
                {!! Form::close() !!}

            </div>
    

        </div>
    

@endsection