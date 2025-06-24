<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage Courses</title>
    <link rel="stylesheet" href="<?= base_url('css/index.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/adminDashboard.css') ?>" />
</head>

<body>

    <header class="dashboard-header">
        <h1>Manage Courses</h1>
        <nav>
            <a href="<?= site_url('admin/dashboard') ?>">Back to Dashboard</a>
        </nav>
    </header>

    <main>
        <section class="courses">
            <h2>Available Courses</h2>
            <div class="course-list">
                <?php $no = 1; ?>
                <?php foreach ($courses as $course): ?>
                    <div class="course-item"
                        style="background-image: url('<?= base_url('assets/images/' . $course['thumbnail']) ?>');">
                        <h3>Course <?= $no++ ?></h3>
                        <p><?= esc($course['title']) ?></p>

                        <div class="course-action">
                            <a href="<?= site_url('admin/courses/view/' . $course['id']) ?>">View</a> |
                            <form action="<?= site_url('admin/courses/delete/' . $course['id']) ?>" method="post" class="delete-form" style="display: inline;">
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus course ini?')">Delete</button>
                            </form>
                            <form action="<?= site_url('admin/courses/update-thumbnail/' . $course['id']) ?>" method="post" enctype="multipart/form-data" style="display: inline; margin-left: 10px;">
                                <?php $inputId = 'thumbnailInput_' . $course['id']; ?>
                                <input type="file" name="thumbnail" id="<?= $inputId ?>" onchange="this.form.submit()" accept="image/*" style="display: none;">
                                <button type="button" onclick="document.getElementById('<?= $inputId ?>').click();" class="change-thumbnail-btn">
                                    Change Thumbnail
                                </button>
                            </form>

                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

            <div style="margin-top: 30px; text-align: center;">
                <!-- Tombol yang memunculkan form -->
                <button id="show-add-form" class="add-course-button">+ Add New Course</button>

                <!-- Form tambah course (awalnya disembunyikan) -->
                <form id="add-course-form" action="<?= site_url('admin/courses/create') ?>" method="post" style="display: none; margin-top: 20px;">
                    <input type="text" name="title" placeholder="Course Title" required>
                    <button type="submit" id="save">Save Course</button>
                    <button type="button" id="cancel-add-course">Cancel</button>
                </form>
            </div>

        </section>
    </main>

</body>
<script>
    document.getElementById('show-add-form').addEventListener('click', function() {
        document.getElementById('add-course-form').style.display = 'block';
        this.style.display = 'none'; // sembunyikan tombol "+ Add New Course"
    });

    document.getElementById('cancel-add-course').addEventListener('click', function() {
        document.getElementById('add-course-form').style.display = 'none';
        document.getElementById('show-add-form').style.display = 'inline'; // tampilkan kembali tombol
    });
</script>

</html>