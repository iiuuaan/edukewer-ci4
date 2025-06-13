<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang, <?= esc($username) ?>!</h1>
    <p>Anda (<?php echo esc($username) ?>) berhasil login ke sistem.</p>
    <p>Ini adalah halaman Admin</p>

    <p><a href="<?= site_url('admin/logout') ?>">Logout</a></p>

</body>
</html>
