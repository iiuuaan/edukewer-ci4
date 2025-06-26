<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/adminUser.css') ?>">
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
            <table class="no-border" cellpadding="10" cellspacing="0">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['id']) ?></td>
                        <td>

                            <span id="username-text-<?= $user['id'] ?>"><?= esc($user['username']) ?></span>
                            <form id="username-form-<?= $user['id'] ?>" action="<?= site_url('admin/users/update/' . $user['id']) ?>" method="post" style="display: none;">
                                <input type="text" name="username" value="<?= esc($user['username']) ?>" required>
                                <button type="submit">Save</button>
                                <button type="button" onclick="cancelEdit(<?= $user['id'] ?>)">Cancel</button>
                            </form>

                        </td>
                        <td><?= esc($user['role']) ?></td>
                        <td>

                            <button onclick="editUsername(<?= $user['id'] ?>)" class="edit-username-btn">Edit</button> |
                            <form action="<?= site_url('admin/users/delete/' . $user['id']) ?>" method="post" class="delete-form" style="display: inline;">
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus user ini?')">Delete</button>
                            </form> |
                            <button onclick="location.href='<?= site_url('admin/users/courses/' . $user['id']) ?>'" class="view-courses-btn">View Progress</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </main>

</body>
<script>
    function editUsername(id) {
        document.getElementById('username-text-' + id).style.display = 'none';
        document.getElementById('username-form-' + id).style.display = 'inline';
    }

    function cancelEdit(id) {
        document.getElementById('username-form-' + id).style.display = 'none';
        document.getElementById('username-text-' + id).style.display = 'inline';
    }
</script>

</html>