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

        <section class="module-resources">
            <h2>Referensi</h2>
            <ul>
                <li><a href="https://www.w3schools.com">W3Schools</a></li>
                <li><a href="https://developer.mozilla.org">MDN Web Docs</a></li>
                <li><a href="https://www.codecademy.com">Codecademy</a></li>
            </ul>
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
    <h3>Forum Diskusi untuk Modul Ini</h3>

    <?php foreach ($threads as $thread): ?>
        <div class="thread">
            <h4><?= esc($thread['title']) ?></h4>
            <p><?= esc($thread['content']) ?></p>

            <div class="forum-messages">
                <?php if (!empty($postsGrouped[$thread['thread_id']])): ?>
                    <?php foreach ($postsGrouped[$thread['thread_id']] as $post): ?>
                        <p><strong>User #<?= esc($post['user_id']) ?>:</strong> <?= esc($post['content']) ?></p>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p><em>Belum ada tanggapan.</em></p>
                <?php endif; ?>
            </div>

            <form action="<?= site_url('forum/post') ?>" method="post">
                <textarea name="content" rows="2" placeholder="Tulis balasan..."></textarea>
                <input type="hidden" name="thread_id" value="<?= $thread['thread_id'] ?>">
                <button type="submit">Kirim</button>
            </form>
        </div>
    <?php endforeach; ?>
<form action="<?= site_url('forum/thread/create') ?>" method="post">
    <h4>Buat Thread Baru</h4>
    <input type="hidden" name="course_id" value="<?= $module['course_id'] ?>">
    <input type="hidden" name="module_number" value="<?= $module['module_number'] ?>">
    <input type="text" name="title" placeholder="Judul Thread" required>
    <textarea name="content" placeholder="Isi thread..." rows="3" required></textarea>
    <button type="submit">Buat Thread</button>
</form>

</section>

    </main>

    <script src="assets/js/script.js"></script>
</body>

</html>