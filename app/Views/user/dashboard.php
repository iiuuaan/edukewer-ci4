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
                <a href="<?= site_url('/') ?>">Home</a>
                <span class="divider">|</span>
                <a href="dashboard.html">My Courses</a>
                <span class="divider">|</span>
                <a href="<?= site_url('user/logout') ?>">Logout</a>
            </nav>
        </div>
    </header>

<main class="dashboard-main">
    <section class="last-courses">
        <h2>Kursus Terakhir Diakses</h2>
        <?php if (!empty($lastCourses)): ?>
        <div class="course-list">
            <?php
            $no = 1;
            foreach ($lastCourses as $course): ?>
                <div class="course-item"
                    data-url="<?= site_url('course/' . $course['id']) ?>"
                    style="cursor: pointer; background-image: url('<?= base_url('assets/images/' . $course['thumbnail']) ?>');">
                    <h3>Course <?= $no++ ?></h3>
                    <p><?= esc($course['title']) ?></p>
                    <a href="<?= site_url('course/' . $course['id']) ?>">Lanjutkan Belajar</a>
                </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
            <p>Belum ada aktivitas kursus.</p>
        <?php endif; ?>
    </section>

</main>



</body>
</html>
