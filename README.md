Movie Database Project
Overview
The Movie Database Project is a web-based application developed using PHP and MySQL. The application allows users to manage movie records through a simple interface by performing Create, Read, Update and Delete (CRUD) operations.

Users can add new movies, view existing records, edit movie details, delete records and search for movies by title. The project demonstrates the integration of PHP with a MySQL database and provides practical experience in web application development.

Features
Add new movie records
View all movies stored in the database
Edit existing movie information
Delete movie records
Search for movies by title
MySQL database connectivity
Dynamic PHP web pages
Secure search functionality using prepared statements
User-friendly navigation interface
Technologies Used
PHP
MySQL
HTML5
CSS3
XAMPP
Git
GitHub
Database Design
Database
db2438132
Table
movie_database_project
Table Structure
Field	Type
id	INT AUTO_INCREMENT PRIMARY KEY
title	VARCHAR(100)
genre	VARCHAR(50)
director	VARCHAR(100)
release_year	INT
rating	DECIMAL(3,1)
Project Structure
movie_database_project
│
├── add_movie.php
├── view_movies.php
├── edit_movie.php
├── delete_movie.php
├── search.php
├── db_connect.php
├── index.php
├── composer.json
├── composer.lock
├── css/
└── templates/
Functionality
Add Movie
Allows users to enter and save a new movie record to the database.

View Movies
Displays all movie records currently stored in the database.

Edit Movie
Enables users to update existing movie information.

Delete Movie
Allows users to remove movie records from the database.

Search Movies
Provides the ability to search for movies by title using a secure prepared statement query.

Installation and Setup
Prerequisites
Before running this project, ensure the following software is installed:

PHP 8+
MySQL
Git
Web browser
Setup Steps
Clone the repository:
git clone https://github.com/Mr-sucram/movie-database-project.git


Create a MySQL database.

Create the required table:

CREATE TABLE movie_database_project (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    genre VARCHAR(50),
    director VARCHAR(100),
    release_year INT,
    rating DECIMAL(3,1)
);
Update the database connection settings in:
db_connect.php
Start Apache and MySQL using XAMPP.

Open the project in your browser:

http://localhost/movie_database_project/
Security
The search functionality uses PHP prepared statements to reduce the risk of SQL injection attacks.

Example:

$stmt = $conn->prepare(
    "SELECT * FROM movie_database_project WHERE title LIKE ?"
);
Future Improvements
Potential future enhancements include:

User authentication system
Movie poster image uploads
Advanced filtering and sorting
Responsive mobile-friendly design
User reviews and ratings
Pagination for large datasets
Learning Outcomes
This project demonstrates:

PHP programming fundamentals
MySQL database design
CRUD operations
Database connectivity
Form handling
Query execution
Git version control
GitHub repository management
Author
Marcus Obakpolor Ogbebor

University of Wolverhampton

Module: Web Application Development

Academic Coursework Project

License
This project has been developed for educational and academic purposes only.