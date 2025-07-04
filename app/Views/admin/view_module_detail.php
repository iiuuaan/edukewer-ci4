<head>


    <link rel="stylesheet" href="<?= base_url('css/module.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/adminModule.css') ?>">
</head>

    <header>
        <h1>Manage Module Detail</h1>
        <div class="header-right">
            <nav id="nav-links">
                <a href="<?= site_url('admin/courses/view/' . $module['course_id']) ?>">Manage Courses Detail</a>
                <a href="<?= site_url('admin/dashboard') ?>">Dashboard</a>
            </nav>
        </div>
    </header>
<main class="module-container">
    <section class="module-content">
        <h2>Materi</h2>

        <!-- Normal Display -->
        <div id="content-display">
            <?= $module['content'] ?>
        </div>

        <!-- Edit Form (hidden by default) -->
        <form id="edit-form" action="<?= site_url('admin/modules/update-content/' . $module['course_id'] . '/' . $module['module_number']) ?>" method="post" style="display: none;">
            <textarea name="content" rows="10" cols="80"><?= esc($module['content']) ?></textarea><br>
            <button type="submit">Save</button>
            <button id="cancel-edit-btn" type="button" onclick="cancelEdit()">Cancel</button>
        </form>

        <button id="edit-button" onclick="toggleEdit()">Edit Content</button>
    </section>

    <section class="video-container">
        <div style="display: flex; align-items: center; justify-content: space-between;">
            <h3 style="margin: 0;">Video Pembelajaran</h3>
            <button id="edit-video-url-btn" class="edit-btn" onclick="toggleVideoEdit()" title="Edit Video URL" style="cursor: pointer;">
                ✎
            </button>
        </div>

        <!-- Tampilan normal iframe -->
        <div id="video-display">
            <iframe width="600" height="340"
                src="<?= esc($module['video_url']) ?>"
                title="Video Pembelajaran"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>

        <!-- Form edit video URL -->
        <form id="video-edit-form" action="<?= site_url('admin/modules/update-video/' . $module['course_id'] . '/' . $module['module_number']) ?>" method="post" style="display: none; margin-top: 10px;">
            <input type="url" name="video_url" value="<?= esc($module['video_url']) ?>" style="width: 100%;" required>
            <br><br>
            <button type="submit">Save Video URL</button>
            <button id="cancel-edit-btn" type="button" onclick="cancelVideoEdit()">Cancel</button>
        </form>

        <?php if ($quiz): ?>
            <section class="quiz-section">
                <h3>Kuis Modul</h3>
                <a href="<?= site_url('admin/quiz/' . $module['course_id'] . '/' . $module['module_number'] . '/' . $quiz['id']) ?>" class="quiz-link">Manage Quiz</a>
            </section>
        <?php else: ?>
            <section class="quiz-section">
        <h3>Kuis Modul</h3>
                <p>There are no quizzes for this module yet.</p>
        <form action="<?= site_url('admin/quiz/' . $module['course_id'] . '/' . $module['module_number'] . '/create') ?>" method="post">
            <button type="submit">+ Add Quiz</button>
        </form>
    </section>
            <?php endif; ?>


            </section>

</main>

<script>
    function toggleEdit() {
        document.getElementById('edit-form').style.display = 'block';
        document.getElementById('content-display').style.display = 'none';
        document.getElementById('edit-button').style.display = 'none';
    }

    function cancelEdit() {
        document.getElementById('edit-form').style.display = 'none';
        document.getElementById('content-display').style.display = 'block';
        document.getElementById('edit-button').style.display = 'inline';
    }

    function toggleVideoEdit() {
        document.getElementById('video-display').style.display = 'none';
        document.getElementById('video-edit-form').style.display = 'block';
    }

    function cancelVideoEdit() {
        document.getElementById('video-display').style.display = 'block';
        document.getElementById('video-edit-form').style.display = 'none';
    }
</script>