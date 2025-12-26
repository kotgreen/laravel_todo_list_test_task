@extends('layouts.main')
@section('content')
    <div>
        <h1 class="mb-4">To-Do List</h1>
        <div class="mb-3">
            <a href="{{ route('task.create') }}" class="btn btn-sm btn-primary">Create task</a>
        </div>
    </div>
    <div>
        <table class="table w-50">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>
                            <a href="{{ route('task.show', $task->id) }}">{{ $task->title }}</a>
                        </td>
                        <td>
                            {{ $task->status->name }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
