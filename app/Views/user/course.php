<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course Details - Edukewer</title>
    <link rel="stylesheet" href="<?= base_url('css/course.css') ?>">
</head>
<body>
    <header>
        <h1><?= esc($course['title']) ?></h1>
        <nav>
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="#">Dashboard</a>
        </nav>
    </header>

    <main class="course-content">
        <section class="course-description">
            <h2>Deskripsi Kursus</h2>
            <p><?= esc($course['description'])?></p>
        </section>

        <section class="modules">
            <h2>Daftar Modul</h2>
            <ul class="module-list">

            <?php
                $no = 1;
                foreach ($modules as $module): ?>
                <li>
                    <a href="<?= base_url('course/' . $course['id'] . '/module/' . $module['id']) ?>">
                        <strong>Modul <?= $no++ ?>:</strong> <?= esc($module['title']) ?>
                    </a>
                </li>
            <?php endforeach; ?>

            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Edukewer. All rights reserved.</p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
