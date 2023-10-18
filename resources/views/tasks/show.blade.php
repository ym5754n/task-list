@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }}</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</th>
        <tr>
            <th>task</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>

    <a class="btn btn-light" href="{{ route('tasks.edit', ['id' => $task->id]) }}">Edit</a>

@endsection