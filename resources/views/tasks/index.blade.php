@extends('layouts.app')

@section('content')
<h1>Task List</h1>

<!-- // display / render all of the tasks that we have.  -->
    @foreach($tasks as $task)
    <div class="card" style="margin-bottom:20px">
        <div class="card-body">
            <p>{{$task -> description }} </p>
            <a href="" class="btn btn-secondary" > Complete </a>
        </div>
    </div>
    
    @endforeach
    <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
    
@endsection