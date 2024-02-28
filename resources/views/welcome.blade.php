@extends('layout')

@section('title')
Home
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-20 flex items-center">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Planner Plan</h1>
            <p class="text-lg">Where you need to plan and get reminded of your bad planning habits. A powerful task scheduling application.</p>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">How it works:</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Login</h3>
                    <p>Login and get your personal schedule.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Make a to do</h3>
                    <p>Effortlessly schedule and manage your bad habits at specific times of the day.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">Choose an hour</h3>
                    <p>From this hour until this.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

