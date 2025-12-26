@extends('layouts.main')
@section('content')
    <div>
        <h1 class="mb-4">To-Do List</h1>
        <div>
            <a href="{{ route('task.create') }}" class="btn btn-sm btn-primary mb-2">Create task</a>
        </div>
        @foreach ($tasks as $task)
            <div>
                <a href="{{ route('task.show', $task->id) }}">{{ $task->id }}. {{ $task->title }}</a>
            </div>
        @endforeach
    </div>
@endsection
