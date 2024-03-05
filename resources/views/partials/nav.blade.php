<!-- Navbar -->
  <nav class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-600">
      <div class="max-w-screen-l flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Planner Plan</span>
        </a>
        

        <div class="items-center justify-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="{{ route('home') }}" class="block py-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
            </li>
            <li>
              <a href="{{ route('about') }}" class="block py-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
          @auth
            <li>
              <a href="{{ route('tasks.index') }}" class="block py-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Schedule</a>
            </li>
          @endauth
          </ul>
        </div>
    
        <div class="flex md:order-2 space-x-3 md:space-x-0 items-center">
          @auth
            <span class="mr-4">Welkom, {{ auth()->user()->name}}</span>

            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Log Out</button>
            </form>
          @endauth
          @guest
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-white-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-4"><a href="{{ route('sessions.create') }}">Login</a></button>
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-4"><a href="{{ route('register.create') }}">Register</a></button>
          @endguest
        </div>
    </div>
      
  </nav>