<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Demo')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-white text-lg font-semibold">Planner Plan</a>
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" class="text-white hover:text-gray-200">Home</a></li>
                <li><a href="#" class="text-white hover:text-gray-200">About</a></li>
                <li><a href="#" class="text-white hover:text-gray-200">Schedule</a></li>
                <li><a href="{{ route('register.create') }}" class="text-white hover:text-gray-200">Login</a></li>
            </ul>
        </div>
    </nav>


    <main>
        @yield("content") 
    </main>   

        <!-- Footer -->
    <footer class="bg-blue-500 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Planning Plan Planner by Siggy. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>