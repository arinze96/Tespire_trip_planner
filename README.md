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


- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
