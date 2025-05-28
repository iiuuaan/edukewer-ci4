<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
            <form id="login-form" method="post" action="<?= base_url('user/check_login') ?>">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <?php if (session()->getFlashdata('error')): ?>
            <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>

        <!-- <p id="error-message" style="color: red; display: none;">Invalid credentials!</p> -->

        <p style="margin-top: 15px;">
                Belum punya akun? <a href="<?= base_url('register') ?>">Daftar di sini</a>
        </p>
    </div>
</body>
</html>
