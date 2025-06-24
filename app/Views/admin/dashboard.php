<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>

<header class="dashboard-header">
    <h1>Admin Dashboard</h1>
    <nav>
        <a href="<?= site_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= site_url('admin/logout') ?>">Logout</a>
    </nav>
</header>

<main>
    <section class="admin-options">
        <h2>Manage Platform</h2>
        <ul>
            <li><a href="<?= site_url('admin/courses') ?>">Manage Courses</a></li>
            <li><a href="<?= site_url('admin/users') ?>">Manage Users</a></li>
        </ul>
    </section>
</main>

</body>
</html>
