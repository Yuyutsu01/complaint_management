# Student Complaint Management System

## Description
A web-based complaint management system built using HTML, CSS, JavaScript, PHP, and MySQL.
Students can submit complaints and administrators can view and update complaint status.

## Technologies Used
- HTML, CSS
- JavaScript
- PHP
- MySQL
- XAMPP (Local Server)

## How to Run the Project
1. Install XAMPP
2. Start Apache and MySQL
3. Copy the project folder into:
   C:\xampp\htdocs\
4. Create a database named `scms`
5. Import the following table:

CREATE TABLE complaints (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    complaint TEXT,
    status VARCHAR(20) DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

6. Open browser and go to:
   http://localhost/scms/index.html

## Admin Panel
http://localhost/scms/fetch.php

## Author
Your Name
