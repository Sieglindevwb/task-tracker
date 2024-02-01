@extends('layout')

@section('title')
Create task
@endsection

@section('content')

  <div class="max-w-md mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
            <input type="text" id="title" name="title" required
                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div>
            <label for="start_time" class="block text-sm font-medium text-gray-700">Start Time (HH:MM):</label>
            <input type="text" id="start_time" name="start_time" required
                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div>
            <label for="end_time" class="block text-sm font-medium text-gray-700">End Time (HH:MM):</label>
            <input type="text" id="end_time" name="end_time" required
                   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <button type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Create Task
        </button>
    </form>
</div>
@endsection