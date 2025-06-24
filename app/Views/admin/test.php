<ul class="module-list">
            <?php
                $no = 1;
                foreach ($modules as $module): ?>
                <li>
                    <a href="<?= site_url('course/' . $course['id'] . '/module/' . $module['module_number']) ?>">
                        <strong>Modul <?= $no++ ?>:</strong> <?= esc($module['title']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>