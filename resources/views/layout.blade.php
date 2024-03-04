<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Demo')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen bg-gray-100 font-sans">
  <!-- Navbar -->
  <div>
    @include('partials.nav');
  </div>

  <!-- Main content -->
  <main class="flex-grow">
    @yield("content") 
  </main>

  <!-- Footer -->
  <div>
    @include('partials.footer');
  </div>
</body>
</html>
