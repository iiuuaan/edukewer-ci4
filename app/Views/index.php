<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Learning Platform</title>
    <link rel="stylesheet" href="<?= base_url('css/index.css') ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet" />
</head>
<body>
    <header>
        <h1>Edukewer</h1>

        <div class="header-right">
            <nav id="nav-links">
                <a href="<?= site_url('/') ?>">Home</a>
                <a href="<?= site_url('login')?>">Login</a>
                <a href="<?= site_url('register')?>">Register</a>
            </nav>
        </div>
    </header>

    <section class="welcome">
        <h2>Welcome to <span class="brand-name">Edukewer</span></h2>
        <p>Your online learning platform for programming and technology courses.</p>
    </section>


    <input type="text" id="search" placeholder="Cari kursus..." class="search-bar" />


    <section class="courses">
        <h2>Available Courses</h2>
        <div class="course-list">
            <div class="course-item course1">
                <h3>Course 1</h3>
                <p>Introduction to Programming</p>
                <a href="course1.html">View Course</a>
            </div>
            <div class="course-item course2">
                <h3>Course 2</h3>
                <p>Web Development Basics</p>
                <a href="course2.html">View Course</a>
            </div>
            <div class="course-item course3">
                <h3>Course 3</h3>
                <p>Data Structures and Algorithms Basics</p>
                <a href="course3.html">View Course</a>
            </div>
            <div class="course-item course4">
                <h3>Course 4</h3>
                <p>Database Fundamentals</p>
                <a href="course4.html">View Course</a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Edukewer. All rights reserved.</p>
    </footer>
</body>
</html>
