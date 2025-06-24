<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Module Details - Edukewer</title>
    <link rel="stylesheet" href="<?= base_url('css/module.css') ?>">
</head>

<body>
    <header>
        <h1>Modul <?= esc($module['module_number']) ?>: <?= esc($module['title']) ?></h1>
        <nav>
            <a href="<?= site_url('course/' . $module['course_id']) ?>">Kembali ke Course</a>
            <a href="../dashboard.html">Dashboard</a>
        </nav>
    </header>

    <main class="module-container">
        <section class="module-content">
            <h2>Materi</h2>
            <?php
            echo $module['content'];
            ?>
        </section>


        <section class="video-container">
            <h3>Video Pembelajaran</h3>
            <iframe width="600" height="340"
                src="<?= esc($module['video_url']) ?>"
                title="Video Pembelajaran"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </section>

        <section class="quiz-section">
            <h3>Kuis Modul</h3>
            <a href="<?= site_url('course/' . $module['course_id'] . '/module/' . $module['module_number'] . '/quiz') ?>" class="quiz-link">Kerjakan Kuis</a>
        </section>

        <section class="forum-section">
            <h3>Forum Diskusi</h3>
            <a href="<?= site_url('course/' . $module['course_id'] . '/module/' . $module['module_number'] . '/forum') ?>" class="forum-link">
                Buka Forum Diskusi
            </a>
        </section>

    </main>

    <script src="assets/js/script.js"></script>
</body>

</html>