<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Trip Planner

Overview

Welcome to the Trip Planner project! This web application allows users to plan their vacation trips by inputting various details, which are then summed up and rendered on a Google Map. Users can rearrange trips based on different criteria, such as distance, duration, gallons of gas consumed, and date. Additionally, all trips can be connected on a map for a comprehensive overview.

Features

Trip Input: Users can input details for each trip, including start and end locations, date, estimated duration, distance, and gas consumption.

Dynamic Sorting: Rearrange trips based on:

  .Distance

  .Duration

  .Gallons of gas consumed

  .Date

Map Integration: All trips are connected and displayed on a Google Map for easy visualization.

Database Integration: All trip details are stored in a database for persistence.

Google Maps API Integration: The application uses Google Maps API to render the trips on the map.


## Installation

Prerequisites

  Node.js: Ensure you have Node.js installed on your machine.

  Database: This project includes a database in the root directory(Tespire.sql). Make sure your environment is configured to run the included database setup.

  Google API Key: Obtain a Google Maps API key from the Google Cloud Console. You'll need this key to enable map rendering.

Setup

  Clone the Repository 

    git clone https://github.com/arinze96/Tespire_trip_planner.git
    cd tespire_trip_planner

    run composer install 
    ti install essential files and vendor files

    create the .env file by copying .env.example and change the database credentials to

      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE="Tespire"
      DB_USERNAME="root"
      DB_PASSWORD="root"

      Set Up the Database

      Ensure your database is running and properly configured. Import the database schema included in the project (e.g., database.sql) to your database system.

      Start the Application

      The application should now be running on http://localhost:3000.

## Usage

Add Trips: Start by adding the trips you'll take during your vacation. Input details like start and end points, dates, duration, and gas consumption.

Sort Trips: Use the sorting options to rearrange your trips based on your preferred criteria.

Visualize on Map: All your trips will be connected and displayed on the Google Map.


## Contribution

If you'd like to contribute to this project, feel free to fork the repository, create a branch, and submit a pull request. Please ensure that your code is well-documented and tested.

## License

This project is licensed under the MIT License. See the LICENSE file for details.

