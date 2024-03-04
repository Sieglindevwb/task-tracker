# Task Tracker

Task Tracker is a web application designed to help users manage their daily tasks. Users can log in, view their schedule for the day, update tasks, and mark them as completed. The application allows users to register if they don't have an account yet, providing a personalized task management experience.

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

1. Clone the repository to your local machine.
2. Create a `.env` file based on the provided `.env.example` file.
3. Configure the `.env` file to connect to your database.
4. Install Composer dependencies by running `composer install`.
5. Install npm dependencies by running `npm install`.

## Usage

To use Task Tracker in a development environment, follow these steps:

1. Run database migrations and seeders to populate the database with default data:
    ```bash
    php artisan migrate --seed
    ```
