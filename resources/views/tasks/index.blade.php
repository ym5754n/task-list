@extends('layouts.app')

@section('content')
    @auth
        <h1>TaskList</h1>

        @if (count($tasks) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>content</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td><a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->id }}</a></td>
                        <td>{{ $task->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <a class="btn btn-primary" href="{{ route('tasks.create') }}">New Task</a>
    @else
        <h1>welcome</h1>
    @endauth

@endsection