<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Kuis</title>
    <link rel="stylesheet" href="<?= base_url('css/quiz.css') ?>">
    <style>
        .correct { color: green; font-weight: bold; }
        .incorrect { color: red; font-weight: bold; }
    </style>
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

    <section class="quiz">
        <h2>Review Kuis</h2>
        <p>Nilai Anda: <?= esc($score) ?> dari <?= esc($total) ?> (<?= esc(round(($score / $total) * 100)) ?>%)</p>

        <?php foreach ($questions as $index => $q): ?>
            <div id="result" class="question">
            <?php
                $userAnswer = $submittedAnswers[$q['id']] ?? null;
                $correct = $userAnswer === $q['correct_option'];
            ?>
                <p><?= ($index + 1) . '. ' . strip_tags($q['question'], '<code>') ?></p>

                <?php foreach (['a', 'b', 'c'] as $opt): ?>
                    <?php
                        $value = $q['option_' . $opt];
                        $class = '';

                        if ($userAnswer === $opt && $opt === $q['correct_option']) {
                            $class = 'correct'; // jawaban benar
                        } elseif ($userAnswer === $opt && $opt !== $q['correct_option']) {
                            $class = 'incorrect'; // jawaban salah
                        } elseif ($opt === $q['correct_option']) {
                            $class = 'correct'; // highlight jawaban benar jika user salah
                        }
                    ?>
                    <label class="<?= $class ?>">
                        <input type="radio" disabled <?= $userAnswer === $opt ? 'checked' : '' ?>>
                        <?= esc($value) ?>
                    </label>
                <?php endforeach; ?>

                <?php if ($userAnswer === null): ?>
                    <p class="incorrect">Tidak dijawab</p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </section>

</body>
</html>
