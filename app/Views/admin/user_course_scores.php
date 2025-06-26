<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Scores – <?= esc($user['username']) ?> – <?= esc($course['title']) ?></title>
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/adminUser.css') ?>">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1em;
        }

        th,
        td {
            padding: .75em;
            border: 1px solid #ccc;
            text-align: left;
        }
    </style>
</head>

<body>
    <header class="dashboard-header">
        <h1>Quiz Scores for <?= esc($user['username']) ?></h1>
        <nav>
            <a href="<?= site_url('admin/users/courses/' . $user['id']) ?>">← Back to Courses Taken</a>
        </nav>
    </header>

    <main>

        <section class="users">
            <!-- quizclass -->
            <h2><?= esc($course['title']) ?></h2>
            <?php if (empty($results)): ?>
                <p>No quiz attempts found for this user in this course.</p>
            <?php else: ?>
                <table class="no-border" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>Module #</th>
                        <th>Quiz Title</th>
                        <th>Score</th>
                        <th>Completed At</th>
                    </tr>
                    <?php foreach ($results as $r): ?>
                        <tr>
                            <td><?= esc($r['module_number']) ?></td>
                            <td><?= esc($r['quiz_title']) ?></td>
                            <td>
                                <?= esc($r['score']) ?><?= isset($r['total_questions']) && $r['total_questions'] > 0 ? ' / ' . esc($r['total_questions']) : '' ?>
                            </td>

                            <td><?= esc($r['completed_at']) ?></td>
                            <!-- <td>action to review answers</td> -->
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

        </section>
    </main>
</body>

</html>