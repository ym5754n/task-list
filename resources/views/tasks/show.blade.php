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

@endsection