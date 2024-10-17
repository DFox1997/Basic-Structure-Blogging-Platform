# Simple Blogging Platform

## Description
This project is a basic blogging platform built using PHP and MySQL. It allows users to register, create, view, and manage blog posts. This project demonstrates the essential functionalities of a blogging application with user authentication and CRUD operations for posts.

## Features
- **User Registration**: Users can register with a unique username and password.
- **Create Posts**: Registered users can create new blog posts.
- **View Posts**: All users can view a list of blog posts with their titles, content, and timestamps.
- **Database Interaction**: Utilizes MySQL to store user and post data.

## Technologies Used
- **PHP**: Server-side scripting language for handling requests and server logic.
- **MySQL**: Relational database for storing user and post data.
- **Apache**: Web server to serve the application.

## Setup Instructions
### Prerequisites
- **XAMPP**: Install XAMPP from [apachefriends.org](https://www.apachefriends.org/index.html) to set up Apache, MySQL, and PHP.

### Steps
1. **Clone the Repository**:
   - Download the project files or clone the repository using:
     ```sh
     git clone [repository-url]
     ```

2. **Set Up XAMPP**:
   - Start Apache and MySQL from the XAMPP Control Panel.

3. **Create the Database**:
   - Open `http://localhost/phpmyadmin`.
   - Create a database named `blog_platform`.
   - Create the `users` and `posts` tables:
     ```sql
     CREATE TABLE users (
         user_id INT AUTO_INCREMENT PRIMARY KEY,
         username VARCHAR(50) NOT NULL UNIQUE,
         password VARCHAR(255) NOT NULL
     );

     CREATE TABLE posts (
         post_id INT AUTO_INCREMENT PRIMARY KEY,
         user_id INT,
         title VARCHAR(255) NOT NULL,
         content TEXT NOT NULL,
         date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

4. **Place Project Files in XAMPP Directory**:
   - Move the project files to `C:\xampp\htdocs\blog_platform`.

### Run the Application
1. **Open Your Browser**:
   - Navigate to `http://localhost/blog_platform/auth.php`.
   - Register a new user and log in.
   - Create new blog posts and view them on the index page.

## Project Structure
blog_platform/
│
├── db.php
│
├── auth.php
│
├── create_post.php
│
└── index.php

