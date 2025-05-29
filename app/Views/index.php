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

            <?php
                $no = 1;
                foreach ($courses as $course): ?>
                <div class="course-item" style="background-image: url('<?= base_url('assets/images/' . $course['thumbnail']) ?>');">
                    <h3>Course <?= $no++ ?></h3>
                    <p><?= esc($course['title']) ?></p>
                    <a href="<?= base_url('course/' . $course['id'])?>">View Course</a>
                </div>
            <?php endforeach; ?>

        </div>
    </section>

    <footer>
        <p>&copy; 2025 Edukewer. All rights reserved.</p>
    </footer>
</body>
</html>
