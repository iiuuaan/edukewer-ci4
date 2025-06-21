<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forum Diskusi Modul <?= esc($module['module_number']) ?></title>
    <link rel="stylesheet" href="<?= base_url('css/module.css') ?>">
</head>

<body>
    <header>
        <h1>Forum Modul <?= esc($module['module_number']) ?>: <?= esc($module['title']) ?></h1>
        <nav>
            <a href="<?= site_url('course/' . $module['course_id'] . '/module/' . $module['module_number']) ?>">Kembali ke Modul</a>
            <a href="<?= site_url('dashboard') ?>">Dashboard</a>
        </nav>
    </header>
    <main class="module-container">

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
</body>

</html>