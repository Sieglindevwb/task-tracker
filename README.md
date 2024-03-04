# Task Tracker

Task Tracker is a web application designed to help users manage their daily tasks. Users can log in, view their schedule for the day, update tasks, and delete them as completed. The application allows users to register if they don't have an account yet, providing a personalized task management experience.

## Table of Contents

-   [About](#about)
-   [Getting Started](#getting-started)
-   [Installing](#installing)
-   [Usage](#usage)
-   [Contributing](#contributing)

## About

Task Tracker provides users with an overview of their daily tasks, allowing them to schedule, update, and delete tasks as needed. The application is designed to streamline task management and improve productivity by providing users with a centralized platform for organizing their schedules.

## Getting Started

To get a copy of the project up and running on your local machine for development and testing purposes, follow these steps:

## Installing

1. **Clone the repository** to your local machine:

    ```bash
    git clone git@github.com:Sieglindevwb/task-tracker.git
    ```

2. **Create a `.env` file** based on the provided `.env.example` file:

    ```bash
    cp .env.example .env
    ```

3. **Configure the `.env` file** to connect to your database and set other environment variables.

4. **Install Composer dependencies** by running:

    ```bash
    composer install
    ```

5. **Install npm dependencies** by running:
    ```bash
    npm install
    ```

## Usage

To use Task Tracker in a development environment, follow these steps:

1. **Run database migrations and seeders** to populate the database with default data:

    ```bash
    php artisan migrate --seed
    ```

2. **Start the development server** by running:

    ```bash
    php artisan serve
    ```

3. **Access the application** in your web browser and register/login to access your schedule.
