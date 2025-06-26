<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sertifikat Saya</title>
    <style>
        .course-card {
            border: 1px solid #ccc;
            padding: 1em;
            margin-bottom: 1em;
            border-radius: 8px;
        }
        .certificate-btn {
            background-color: green;
            color: white;
            border: none;
            padding: 0.5em 1em;
            border-radius: 4px;
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/completedCourse.css') ?>">
</head>
<body>
    <header class="dashboard-header">
        <div class="header-left">
            <h1>Dashboard</h1>
        </div>
        <div class="header-right">
            <nav id="nav-links">
                <a href="<?= site_url('/') ?>">Home</a>
                <a href="<?= site_url('user/dashboard') ?>">Back to Dashboard</a>
            </nav>
        </div>
    </header>

<h2>Completed Courses</h2>

<?php if (empty($courses)): ?>
    <p>No courses have been completed.</p>
<?php else: ?>
    <?php foreach ($courses as $course): ?>
        <div class="course-card">
            <h3><strong><?= esc($course['title']) ?></strong></h3>
            <p><?= esc($course['description']) ?></p>
            <p>Progress: <?= esc($course['progress']) ?>%</p>
            <form action="<?= site_url('user/dashboard/showCertificate') ?>" method="get" style="display:inline;">
                <input type="hidden" name="course_id" value="<?= esc($course['id']) ?>">
                <button type="submit" style="margin-left: 10px;">
                    View Certificate
                </button>
            </form>
        </div>
    <?php endforeach; ?>
<?php endif; ?>


</body>
</html>
