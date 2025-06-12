<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kuis</title>
    <link rel="stylesheet" href="<?= base_url('css/quiz.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/quizResult.css') ?>">
</head>
<body>
    <header>
        <h1>Quiz</h1>
        <nav>

        <a href="<?= site_url("course/{$courseId}/module/{$moduleNumber}") ?>">Kembali ke modul</a>
        <a href="<?= site_url("/") ?>">Dashboard</a>
        <a href="<?= site_url("user/logout") ?>" id="logout">Logout</a>
        </nav>
    </header>

    <div class="container-result">
        <h2>Hasil Kuis</h2>

        <p>Nilai Anda: <?= esc($score) ?> dari <?= esc($total) ?></p>

        <p><?= esc(round(($score / $total) * 100)) ?>%</p>

        <a href="<?= site_url("course/{$courseId}/module/{$moduleNumber}/quiz/review") ?>">Review</a>
    </div>

</body>

</html>
