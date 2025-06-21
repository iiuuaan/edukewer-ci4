<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('CourseSeeder');
        $this->call('ModuleSeeder');
        $this->call('QuizzesSeeder');
        $this->call('QuizQuestionsSeeder');
        $this->call('ForumSeeder');
    }
}
