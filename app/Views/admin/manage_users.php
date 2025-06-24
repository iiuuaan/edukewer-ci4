<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
</head>
<body>

<header class="dashboard-header">
    <h1>Manage Users</h1>
    <nav>
        <a href="<?= site_url('admin/dashboard') ?>">Back to Dashboard</a>
    </nav>
</header>

<main>
    <section class="users">
        <h2>Registered Users</h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['id']) ?></td>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['role']) ?></td>
                    <td>
                        <a href="<?= site_url('admin/users/edit/' . $user['id']) ?>">Edit</a> |
                        <a href="<?= site_url('admin/users/delete/' . $user['id']) ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>

</body>
</html>
