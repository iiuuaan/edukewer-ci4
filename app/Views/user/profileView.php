<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/profile.css') ?>">
</head>

<body>
    <header class="dashboard-header">
        <div class="header-left">
            <h1>My Profile</h1>
        </div>

        <div class="header-right">
            <nav id="nav-links">
                <a href="<?= site_url('/') ?>">Home</a>
                <a href="<?= site_url('user/dashboard') ?>">Dashboard</a>
                <a href="<?= site_url('user/logout') ?>">Logout</a>
            </nav>
        </div>
    </header>

    <main class="profile-section">
        <section>
            <h2>Profile Information</h2>
            <div class="profile-card">
                <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
                <p><strong>Role:</strong> <?= esc($user['role']) ?></p>
            </div>
        </section>

        <section class="edit-profile-form" style="margin-top: 20px;">
                <h3>Edit Profile</h3>
            <?php if (session()->getFlashdata('success')): ?>
                <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
            <?php endif; ?>

            <form action="<?= site_url('user/dashboard/profile/update') ?>" method="post">
                <label for="edit-username">Username:</label>
                <input type="text" id="edit-username" name="username" value="<?= esc($user['username']) ?>" required><br><br>

                <button type="submit">Save Changes</button>
            </form>
        </section>

<section class="change-password-form" style="margin-top: 40px;">
    <h3>Change Password</h3>

    <?php if (session()->getFlashdata('password_error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('password_error') ?></p>
    <?php endif; ?>
    <?php if (session()->getFlashdata('password_success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('password_success') ?></p>
    <?php endif; ?>

    <form action="<?= site_url('user/dashboard/profile/change-password') ?>" method="post">
        <label for="old_password">Current Password:</label><br>
        <input type="password" name="old_password" required><br><br>

        <label for="new_password">New Password:</label><br>
        <input type="password" name="new_password" required><br><br>

        <label for="confirm_password">Confirm New Password:</label><br>
        <input type="password" name="confirm_password" required><br><br>

        <button type="submit">Change Password</button>
    </form>
</section>



    </main>

</body>

</html>