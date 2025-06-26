<?php
function renderProgressCircle($percent)
{
    $radius = 45;
    $circumference = 2 * pi() * $radius;
    $offset = $circumference * (1 - $percent / 100);

    return '
    <svg width="100" height="100" class="progress-circle">
        <circle cx="50" cy="50" r="' . $radius . '" stroke="#eee" stroke-width="10" fill="none"/>
        <circle cx="50" cy="50" r="' . $radius . '" stroke="#00aaff" stroke-width="10" fill="none"
            stroke-dasharray="' . $circumference . '"
            stroke-dashoffset="' . $offset . '"
            transform="rotate(-90 50 50)"/>
        <text x="50%" y="50%" text-anchor="middle" dy=".3em" font-size="18">' . $percent . '%</text>
    </svg>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/adminUser.css') ?>">
</head>

<body>
    <header class="dashboard-header">
        <h1>Users Progress</h1>
        <nav>
            <a href="<?= site_url('admin/users') ?>">Back to Manage Users</a>
        </nav>
    </header>

    <section class="courses">
        <h2>Courses Taken</h2>
        <div class="course-list">
            <?php if (empty($courses)): ?>
                <p>User has not taken any courses.</p>
            <?php else: ?>
                <?php foreach ($courses as $course): ?>
    <a
            href="<?= site_url('admin/users/courses/scores/' . $user['id'] . '/' . $course['id']) ?>"
            class="course-card-link"
        >
                    <div class="course-card" style="display: flex; align-items: center; justify-content: space-between;">
                        <div>
                            <h3><?= esc($course['title']) ?></h3>
                            <p><?= esc($course['description']) ?></p>
                        </div>
                        <div>
                            <?= renderProgressCircle($course['progress']) ?>
                        </div>
                    </div>
    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </section>

</body>



</html>