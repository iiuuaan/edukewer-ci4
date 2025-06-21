<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>
    <header class="dashboard-header">
        <div class="header-left">
            <h1>Dashboard</h1>
        </div>
        <div class="header-right">
            <nav id="nav-links">
                <a href="index.html">Home</a>
                <span class="divider">|</span>
                <a href="dashboard.html">My Courses</a>
                <span class="divider">|</span>
                <a href="<?= site_url('user/logout') ?>">Logout</a>
            </nav>
        </div>
    </header>

</body>
</html>
