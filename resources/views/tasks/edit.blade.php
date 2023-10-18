@extends('layouts.app')

@section('content')

    <h1>New Task</h1>

    <div class="row">
        <div class="col-6">
            <form action="{{ route('tasks.update', ['id' => $task->id]) }}", method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="content">Task:</label>
                    <input class="form-control" name="content" type="text" id="content" value="{{ $task->content }}">
                </div>

                <input class="btn btn-primary" type="submit" value="Post">
            </form>
        </div>
    </div>

@endsection