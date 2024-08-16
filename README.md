
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

<img width="1429" alt="Screen Shot 2024-08-17 at 00 35 23" src="https://github.com/user-attachments/assets/c720f7e0-619a-4026-bc9d-09e2f0e62484">


Sort Trips: Use the sorting options to rearrange your trips based on your preferred criteria.

<img width="1427" alt="Screen Shot 2024-08-17 at 00 44 10" src="https://github.com/user-attachments/assets/095cb870-eb1d-484f-83b6-e5259ed8522c">


Visualize on Map: All your trips will be connected and displayed on the Google Map.

<img width="1423" alt="Screen Shot 2024-08-17 at 00 45 50" src="https://github.com/user-attachments/assets/7975e6c6-ca40-4af8-843b-4a79b264a02e">


## Contribution

If you'd like to contribute to this project, feel free to fork the repository, create a branch, and submit a pull request. Please ensure that your code is well-documented and tested.

## License

This project is licensed under the MIT License. See the LICENSE file for details.

