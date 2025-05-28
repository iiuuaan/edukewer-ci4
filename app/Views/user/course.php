<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course Details - Edukewer</title>
    <link rel="stylesheet" href="<?= base_url('css/course.css') ?>">
</head>
<body>
    <header>
        <h1>Course: Introduction to Programming</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="dashboard.html">Dashboard</a>
        </nav>
    </header>

    <main class="course-content">
        <section class="course-description">
            <h2>Deskripsi Kursus</h2>
            <p>
                Kursus ini memperkenalkan dasar-dasar pemrograman, termasuk variabel, tipe data, dan struktur kontrol. 
                Cocok untuk pemula yang ingin memulai belajar coding dari awal.
            </p>
        </section>

        <section class="modules">
            <h2>Daftar Modul</h2>
            <ul class="module-list">
                <li>
                    <a href="module.html?module_id=1">
                        <strong>Modul 1:</strong> Pengenalan
                    </a>
                </li>
                <li>
                    <a href="module.html?module_id=2">
                        <strong>Modul 2:</strong> Variabel dan Tipe Data
                    </a>
                </li>
                <li>
                    <a href="module.html?module_id=3">
                        <strong>Modul 3:</strong> Struktur Kontrol
                    </a>
                </li>
            </ul>
        </section>
    </main>

    <script src="assets/js/script.js"></script>
</body>
</html>
