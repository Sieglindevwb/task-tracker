@extends('layout')

@section('title')
Home
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Planner Plan</h1>
            <p class="text-lg">Where you need to plan and get reminded of your bad planning habits. A powerful task scheduling application.</p>
            <a href="#features" class="mt-8 inline-block bg-white text-blue-600 py-2 px-6 rounded-lg font-semibold shadow-md hover:bg-blue-100 transition duration-300">Learn More</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Short explained:</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Task Scheduling</h3>
                    <p>Effortlessly schedule and manage your bad habits at specific times or dates.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Login</h3>
                    <p>Authenticate ot get your personal dashboard and reminders.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Notifications</h3>
                    <p>Receive notifications and reminders for your scheduled tasks.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

