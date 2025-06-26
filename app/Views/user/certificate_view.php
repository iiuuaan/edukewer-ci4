<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/certificate.css') ?>">
</head>

<body>
    <header class="dashboard-header">
        <div class="header-left">
            <h1>Dashboard</h1>
        </div>
        <div class="header-right">
            <nav id="nav-links">
                <a href="<?= site_url('/') ?>">Home</a>
                <a href="<?= site_url('user/dashboard/getMyCertificate') ?>">Back to Completed Courses</a>
            </nav>
        </div>
    </header>

    <section class="certificate">
        <h2>Congratulations!</h2>
        <p>You have successfully completed the course.</p>
        <div class="certificate-box">
            <h3>Certificate of Completion</h3>
            <p><strong>Student Name:</strong> <?= esc($user['username']) ?></p>
            <p><strong>Course Name:</strong> <?= esc($course['title']) ?></p>
            <p><strong>Date:</strong> <?= date('Y-m-d') ?></p>
        </div>
        <button onclick="window.location.href='download-certificate.html'" id="download-certificate">
            Download Certificate
        </button>

    </section>

    <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>

</html>