@extends('layouts.main')
@section('content')
    <h1 class="mb-4">Update a task</h1>
    <div class="form-group w-25">
        <form action="{{ route('task.update', $task->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group mb-2">
                <label for="title">Title</label>
                <input class="form-control" type="text" id="title" name="title" placeholder="Title"
                    value="{{ $task->title }}">

                @error('title')
                    <p class="text-danger">Title должен быть заполнен</p>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Description">{{ $task->description }}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="status">Status</label>
                <select class="form-select" name="status_id" id="status">
                    @foreach ($statuses as $status)
                        <option {{ $status->id === $task->status_id ? 'selected' : '' }} value="{{ $status->id }}">
                            {{ $status->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                <a href="{{ route('task.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </div>
        </form>
    </div>
@endsection
