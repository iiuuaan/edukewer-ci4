<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - <?= $quiz['title'] ?></title>
    <link rel="stylesheet" href="<?= base_url('css/quiz.css') ?>">
    <style>
        .correct {
            color: green;
        }

        .incorrect {
            color: red;
        }

        .timer {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }
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
        <h2>Kuis: <?= $quiz['title'] ?></h2>
        <div class="timer" id="timer">Waktu: 15:00</div>
        <form id="quiz-form" action="<?= site_url("course/{$courseId}/module/{$moduleNumber}/quiz/submit") ?>" method="post">

            <?php foreach ($questions as $index => $q): ?>
                <div class="question">
                    <p><?= ($index + 1) . '. ' . strip_tags($q['question'], '<code>') ?></p>

                    <label><input type="radio" name="answers[<?= $q['id'] ?>]" value="a"> <?= esc($q['option_a']) ?></label>
                    <label><input type="radio" name="answers[<?= $q['id'] ?>]" value="b"> <?= esc($q['option_b']) ?></label>
                    <label><input type="radio" name="answers[<?= $q['id'] ?>]" value="c"> <?= esc($q['option_c']) ?></label>
                </div>
            <?php endforeach; ?>

            <button type="submit">Submit Quiz</button>
        </form>
        <div id="result"></div>
    </section>

    <script>
        let time = <?= esc($timeRemaining) ?>; // waktu dari server
        const timerElement = document.getElementById("timer");

        function updateTimer() {
            const minutes = Math.floor(time / 60);
            const seconds = time % 60;
            timerElement.textContent = `Waktu: ${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

            if (time <= 0) {
                clearInterval(timerInterval);
                document.getElementById("quiz-form").submit(); // submit otomatis
            } else {
                time--;
            }
        }

        const timerInterval = setInterval(updateTimer, 1000);

    </script>
</body>

</html>