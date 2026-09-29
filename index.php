<?php 
require_once "config/database.php"; 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Student Management System</title>
 <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
 <!-- Navigation -->
 <nav class="navbar">
 <div class="container">
 <div class="logo">
 <span>Student</span><span>MS</span>
 </div>
 <ul class="nav-links">
 <li><a href="index.php">Home</a></li>
 <li><a href="#">About</a></li><li><a href="#">Contact</a></li>
 <li><a href="admin/login.php" class="admin-btn">Admin
Login</a></li>
 </ul>
 </div>
 </nav>
 <!-- Hero Section -->

<!-- Hero Section -->
<section class="hero">
    <div class="container hero-content">

        <!-- Left Side: Text -->
        <div class="hero-text">

            <p class="small-title">
                STUDENT MANAGEMENT SYSTEM
            </p>

            <h1>
                Manage Students
                <span>Easy & Fast</span>
            </h1>

            <p class="description">
                A simple and powerful system to manage
                student information from one place.
            </p>

            <div class="hero-buttons">

                <a href="admin/login.php"
                   class="primary-btn">
                    Admin Login
                </a>

                <a href="#features"
                   class="secondary-btn">
                    Learn More
                </a>

            </div>

        </div>

        <!-- Right Side: Student Image -->
        <div class="hero-image">

            <img src="assets/images/student-hero.jpg"
                 alt="Student Management">

        </div>

    </div>
</section> 
 </div>
 </div>
 </div>
 </section>
 <!-- Features -->
 <section class="features" id="features">
 <div class="container">
 <div class="section-title">
 <p>FEATURES</p>
 <h2>Everything You Need</h2></div>
 <div class="feature-grid">
 <div class="feature-card">
 <div class="icon">➕</div>
 <h3>Add Students</h3>
 <p>
 Easily add new student information
to the system.
 </p>
 </div>
 <div class="feature-card">
 <div class="icon">👥</div>
<h3>View Students</h3>
 <p>
 View all registered students
from the admin dashboard.
 </p>
 </div>
 <div class="feature-card">
 <div class="icon">✏️</div>
 <h3>Edit Information</h3>
 <p>
 Update student information
whenever necessary.
 </p>
 </div>
 <div class="feature-card">
 <div class="icon">🗑️</div>
 <h3>Delete Students</h3>
 <p>
 Remove unnecessary student
records safely.</p>
 </div>
 </div>
 </div>
 </section>
 <!-- Footer -->
 <footer>
 <div class="container">
 <p>
 © 2026 Student Management System.
 All Rights Reserved.
 </p>
 </div>
 </footer>
</body>
</html>