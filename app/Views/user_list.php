<!DOCTYPE html>
<html>
<head>
    <title>Daftar User</title>
</head>
<body>
    <h1>Data User</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= esc($user['username']) ?> - <?= esc($user['password']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
