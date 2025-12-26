@extends('layouts.main')
@section('content')
    <h1>To-Do List</h1>
    <div class="mb-2">
        <div> {{ $task->title }} </div>
        <div> {{ $task->description }} </div>
        <div> {{ $task->status->name }} </div>
    </div>
    <div class="d-flex gap-2">
        <div>
            <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary btn-sm">Edit</a>
        </div>
        <div>
            <form action="{{ route('task.delete', $task->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-secondary btn-sm">
            </form>
        </div>
        <div>
            <a href="{{ route('task.index') }}" class="btn btn-secondary btn-sm">Back</a>
        </div>
    </div>
@endsection
