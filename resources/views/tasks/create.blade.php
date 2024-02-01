@extends('layout')

@section('title')
Create task
@endsection

@section('content')

<div class="max-w-md mx-auto mt-10 mb-10">
    <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Create Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title:</label>
            <input type="text" id="title" name="title" required
                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100">
        </div>

        <div>
            <label for="start_time" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Start Time (HH:MM):</label>
            <input type="text" id="start_time" name="start_time" required
                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100">
        </div>

        <div>
            <label for="end_time" class="block text-sm font-medium text-gray-700 dark:text-gray-300">End Time (HH:MM):</label>
            <input type="text" id="end_time" name="end_time" required
                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100">
        </div>

        <button type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Create Task
        </button>
    </form>
</div>

@endsection