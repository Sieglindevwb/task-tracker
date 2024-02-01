@extends('layout')

@section('title')
Edit Task
@endsection

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
            <input type="text" id="title" name="title" value="{{ $task->title }}"
                   class="border-2 border-gray-300 p-2 w-full">
        </div>

        <div>
            <label for="start_time" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Start Time (HH:MM):</label>
            <input type="text" id="start_time" name="start_time" value="{{ $task->start_time }}" required
                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100">
        </div>

        <div>
            <label for="end_time" class="block text-sm font-medium text-gray-700 dark:text-gray-300">End Time (HH:MM):</label>
            <input type="text" id="end_time" name="end_time" value="{{ $task->end_time }}"required
                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Task</button>
    </form>
@endsection