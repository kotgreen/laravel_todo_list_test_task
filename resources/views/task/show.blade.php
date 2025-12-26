@extends('layouts.main')
@section('content')
    <h1>To-Do List</h1>
    <div>
        <div> {{ $task->id }}. {{ $task->title }} </div>
        <div> {{ $task->description }} </div>
    </div>
    <div>
        <a href="{{ route('task.edit', $task->id) }}">Edit</a>
    </div>
    <div>
        <form action="{{ route('task.delete', $task->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
        </form>
    </div>
    <div>
        <a href="{{ route('task.index') }}">Back</a>
    </div>
@endsection
