@extends('layouts.app')

@section('content')

<h1>New Task</h1>

<form action="/tasks" method="POST">
    <div class="form-group">
        @csrf
        <label for="description">Task Description</label> <br>
        <input class="form-control" name="description"/>
    </div>
    <br>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Create Task</button>
    </div>
</form>
@endsection