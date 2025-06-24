<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Quiz - <?= esc($quiz['title']) ?></title>
    <link rel="stylesheet" href="<?= base_url('css/quiz.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/adminQuiz.css') ?>">
</head>

<body>
    <header>
        <h1>Manage Quiz Detail</h1>
        <div class="header-right">
            <nav id="nav-links">
                <a href="<?= site_url("admin/modules/view/$courseId/$moduleNumber") ?>">Manage Modules Detail</a>
                <a href="<?= site_url('admin/dashboard') ?>">Dashboard</a>
            </nav>
        </div>
    </header>
    <section class="quiz">
        <h2>Edit Quiz: <?= esc($quiz['title']) ?></h2>
        <div class="timer" id="timer">Waktu: 15:00</div>
        <form id="quiz-form" action="<?= site_url("admin/quiz/$courseId/$moduleNumber/{$quiz['id']}/update") ?>" method="post">
            <?php foreach ($questions as $index => $q): ?>
                <div class="question">
                    <fieldset style="margin-bottom: 20px;">
                        <legend>Question <?= $index + 1 ?></legend>

                        <input type="hidden" name="questions[<?= $q['id'] ?>][id]" value="<?= $q['id'] ?>">

                        <label>Question:</label>
                        <textarea name="questions[<?= $q['id'] ?>][question]" required rows="3" style="width: 100%;"><?= esc($q['question']) ?></textarea><br>

                        <label>Option A:</label>
                        <input type="text" name="questions[<?= $q['id'] ?>][option_a]" value="<?= esc($q['option_a']) ?>" required><br>

                        <label>Option B:</label>
                        <input type="text" name="questions[<?= $q['id'] ?>][option_b]" value="<?= esc($q['option_b']) ?>" required><br>

                        <label>Option C:</label>
                        <input type="text" name="questions[<?= $q['id'] ?>][option_c]" value="<?= esc($q['option_c']) ?>" required><br>

                        <label>Pilih Jawaban Benar:</label><br>
                        <?php foreach (['a', 'b', 'c'] as $opt): ?>
                            <label>
                                <input type="radio"
                                    name="questions[<?= $q['id'] ?>][correct_option]"
                                    value="<?= $opt ?>"
                                    <?= $q['correct_option'] === $opt ? 'checked' : '' ?>>
                                <?= strtoupper($opt) ?>
                            </label>
                        <?php endforeach; ?>
                        <!-- Tombol hapus dalam satu form -->
                        <button type="submit" name="delete_question" value="<?= $q['id'] ?>" style="background:red;color:white;" onclick="return confirm('Yakin ingin menghapus pertanyaan ini?')">Hapus Pertanyaan</button>
                    </fieldset>
                </div>
            <?php endforeach; ?>

            <button type="submit" name="save_changes">Save Changes</button>
        </form>


        <!-- Tombol untuk menambah pertanyaan -->
        <div style="margin-top: 30px;">
            <button id="add-question-btn" type="button">+ Add Question</button>
        </div>

        <!-- Form pertanyaan baru (disembunyikan) -->
        <form id="new-question-form"
            action="<?= site_url("admin/quiz/$courseId/$moduleNumber/{$quiz['id']}/add-question") ?>"
            method="post"
            style="display: none; margin-top: 20px; border: 1px solid #ccc; padding: 15px;">

            <label>Question:</label><br>
            <textarea name="question" rows="3" style="width: 100%;" required></textarea><br><br>

            <label>Option A:</label><br>
            <input type="text" name="option_a" required><br>

            <label>Option B:</label><br>
            <input type="text" name="option_b" required><br>

            <label>Option C:</label><br>
            <input type="text" name="option_c" required><br><br>

            <label>Pilih Jawaban Benar:</label><br>
            <label><input type="radio" name="correct_option" value="a" required> A</label>
            <label><input type="radio" name="correct_option" value="b"> B</label>
            <label><input type="radio" name="correct_option" value="c"> C</label><br><br>

            <button type="submit">Save Question</button>
            <button type="button" id="cancel-add-btn">Cancel</button>
        </form>
    </section>
</body>
<script>
    const addBtn = document.getElementById('add-question-btn');
    const form = document.getElementById('new-question-form');
    const cancelBtn = document.getElementById('cancel-add-btn');

    addBtn.addEventListener('click', function() {
        addBtn.style.display = 'none';
        form.style.display = 'block';
    });

    cancelBtn.addEventListener('click', function() {
        form.style.display = 'none';
        addBtn.style.display = 'inline';
        form.reset();
    });
</script>

</html>