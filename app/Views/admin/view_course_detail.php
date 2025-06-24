<head>



    <link rel="stylesheet" href="<?= base_url('css/course.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/adminCourse.css') ?>">
</head>

<body>
    <header>
        <h1>Manage Course Detail</h1>
        <div class="header-right">
            <nav id="nav-links">
                <a href="<?= site_url('admin/courses') ?>">Manage Courses</a>
                <a href="<?= site_url('admin/dashboard') ?>">Dashboard</a>
            </nav>
        </div>
    </header>
    <main class="course-content">
        <section class="course-description">
            <h2>Courses Description</h2>
            <p id="course-description"><?= esc($course['description']) ?></p>


            <!-- Tombol Edit -->
            <button id="edit-description-btn">Edit Description</button>
            <!-- Form edit deskripsi yang awalnya disembunyikan -->
            <form id="edit-description-form" action="<?= site_url('admin/courses/update-description/' . $course['id']) ?>" method="post" style="display: none; margin-top: 10px;">
                <textarea name="description" id="description-input" rows="4" style="width: 100%;"><?= esc($course['description']) ?></textarea>
                <button type="submit">Save</button>
                <button type="button" id="cancel-edit-btn">Cancel</button>
            </form>
        </section>

        <section class="modules">
            <h2>Daftar Modul</h2>
            <ul class="module-list">
                <?php $no = 1;
                foreach ($modules as $module): ?>
                    <li data-course-id="<?= $course['id'] ?>" data-module-number="<?= $module['module_number'] ?>">

                        <!-- Tampilan judul normal -->
                        <a href="<?= site_url('admin/modules/view/' . $course['id'] . '/' . $module['module_number']) ?>">
                            <span class="module-title"><strong>Modul <?= $no++ ?>:</strong> <?= esc($module['title']) ?></span>
                        </a>
                        <!-- Tombol edit -->
                        <button class="edit-btn" title="Edit">
                            ✎
                        </button>

                        <!-- Form edit title (disembunyikan awalnya) -->
                        <form class="edit-title-form" action="<?= site_url('admin/modules/update-title/' . $course['id'] . '/' . $module['module_number']) ?>" method="post" style="display: none;">

                            <input type="text" name="title" value="<?= esc($module['title']) ?>" required>
                            <button type="submit">Save</button>
                            <button type="button" class="cancel-edit">Cancel</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>

            <button id="show-add-module-form" class="btn-add">Add Module</button>

            <form id="add-module-form" action="<?= site_url('admin/modules/add/' . $course['id']) ?>" method="post" style="display: none; margin-top: 15px;">
                <label for="title">Judul Modul:</label>
                <input type="text" name="title" required placeholder="Masukkan judul modul"><br>

                <button type="submit">Simpan Modul</button>
                <button type="button" id="cancel-add-module">Batal</button>
            </form>

        </section>
    </main>
</body>

<script>
    document.getElementById('edit-description-btn').addEventListener('click', function() {
        document.getElementById('course-description').style.display = 'none';
        document.getElementById('edit-description-btn').style.display = 'none';
        document.getElementById('edit-description-form').style.display = 'block';
    });

    document.getElementById('cancel-edit-btn').addEventListener('click', function() {
        document.getElementById('edit-description-form').style.display = 'none';
        document.getElementById('course-description').style.display = 'block';
        document.getElementById('edit-description-btn').style.display = 'inline';
    });

    document.querySelectorAll('.edit-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const li = btn.closest('li');
            li.querySelector('.module-title').style.display = 'none';
            btn.style.display = 'none';
            li.querySelector('.edit-title-form').style.display = 'block';
        });
    });

    document.querySelectorAll('.cancel-edit').forEach(function(cancelBtn) {
        cancelBtn.addEventListener('click', function() {
            const li = cancelBtn.closest('li');
            li.querySelector('.module-title').style.display = 'inline';
            li.querySelector('.edit-btn').style.display = 'inline';
            li.querySelector('.edit-title-form').style.display = 'none';
        });
    });

    // Tombol untuk memunculkan form tambah modul
    document.getElementById('show-add-module-form').addEventListener('click', function() {
        document.getElementById('add-module-form').style.display = 'block';
        this.style.display = 'none'; // Sembunyikan tombol
    });

    // Tombol batal
    document.getElementById('cancel-add-module').addEventListener('click', function() {
        document.getElementById('add-module-form').style.display = 'none';
        document.getElementById('show-add-module-form').style.display = 'inline';
    });
</script>