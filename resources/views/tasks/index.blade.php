@extends('layout')

@section('title')
Schedule
@endsection

@section('content')

  <section class="bg-white dark:bg-gray-900 antialiased flex justify-center py-8">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
      <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-4xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">
          Schedule Today 
        </h2>
      </div>

      <div class=" max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16">
        <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">
          @foreach($tasks as $task)
          <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
            <p class="text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
              {{ $task->start_time }} - {{ $task->end_time }}
            </p>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
              {{ $task->title }}
            </h3>
             <a href="{{ route('tasks.edit', $task) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
            </form>
          </div>
          @endforeach
        </div>
      </div> 
      <div class="mt-20 flex justify-center">
    <a href="{{ route('tasks.create') }}" class="border border-transparent bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create Task</a>
</div>

    </div> 
  </section>
@endsection
