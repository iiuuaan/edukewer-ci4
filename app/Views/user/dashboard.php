<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang, <?= esc($username) ?>!</h1>
    <p>Anda (<?php echo esc($username) ?>) berhasil login ke sistem.</p>
    <p>Ini adalah halaman utama setelah login berhasil.</p>

    <p><a href="<?= base_url('user/logout') ?>">Logout</a></p>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>
    <header class="dashboard-header">
        <div class="header-left">
            <h1>Dashboard</h1>
        </div>
        <div class="header-right">
            <nav id="nav-links">
                <a href="index.html">Home</a>
                <span class="divider">|</span>
                <a href="dashboard.html">My Courses</a>
                <span class="divider">|</span>
                <a href="<?= base_url('user/logout') ?>">Logout</a>
            </nav>
        </div>
    </header>

    <section class="dashboard">
        <h2>My Courses</h2>
        <div class="course-list">
            <div class="course-item">
                <h3>Course 1</h3>
                <p>Introduction to Programming</p>
                <a href="<?= base_url('user/course') ?>">Go to Course</a>
            </div>
            <div class="course-item">
                <h3>Course 2</h3>
                <p>Web Development Basics</p>
                <button class="enroll-btn" data-course="Course 2">Enroll</button>
            </div>
        </div>
    </section>

</body>
</html>
