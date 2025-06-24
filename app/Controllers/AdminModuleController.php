<?php

namespace App\Controllers;

class AdminModuleController extends BaseController
{
    public function updateTitle($courseId, $moduleNumber)
    {
        $moduleModel = new \App\Models\ModuleModel();

        $moduleModel->where('course_id', $courseId)
            ->where('module_number', $moduleNumber)
            ->set('title', $this->request->getPost('title'))
            ->update();

        return redirect()->back()->with('success', 'Judul modul diperbarui.');
    }

    public function view($courseId, $moduleNumber)
    {
        $moduleModel = new \App\Models\ModuleModel();
        $quizModel = new \App\Models\QuizzesModel();

        $module = $moduleModel
            ->where('course_id', $courseId)
            ->where('module_number', $moduleNumber)
            ->first();

        if (!$module) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Module not found');
        }

        $quiz = $quizModel
            ->where('course_id', $courseId)
            ->where('module_number', $moduleNumber)
            ->first();

        return view('admin/view_module_detail', [
            'module' => $module,
            'quiz' => $quiz
        ]);
    }

    public function updateContent($courseId, $moduleNumber)
    {
        $content = $this->request->getPost('content');
        $moduleModel = new \App\Models\ModuleModel();

        $moduleModel
            ->where('course_id', $courseId)
            ->where('module_number', $moduleNumber)
            ->set('content', $content)
            ->update();

        return redirect()->to("admin/modules/view/$courseId/$moduleNumber");
    }

    public function updateVideo($courseId, $moduleNumber)
    {
        $videoUrl = $this->request->getPost('video_url');
        // Ubah ke embed jika perlu
        $videoUrl = $this->convertToEmbedUrl($videoUrl);

        $moduleModel = new \App\Models\ModuleModel();

        $moduleModel
            ->where('course_id', $courseId)
            ->where('module_number', $moduleNumber)
            ->set('video_url', $videoUrl)
            ->update();

        return redirect()->to("admin/modules/view/$courseId/$moduleNumber");
    }
    private function convertToEmbedUrl($url)
    {
        // Jika sudah embed, kembalikan langsung
        if (strpos($url, 'youtube.com/embed') !== false) {
            return $url;
        }

        // Tangani format youtu.be
        if (preg_match('#https?://youtu\.be/([a-zA-Z0-9_-]+)#', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }

        // Tangani format youtube.com/watch?v=...
        if (preg_match('#https?://(www\.)?youtube\.com/watch\?v=([a-zA-Z0-9_-]+)#', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[2];
        }

        // Jika tidak dikenali, kembalikan apa adanya
        return $url;
    }
    public function add($courseId)
    {
        $moduleModel = new \App\Models\ModuleModel();

        // Hitung jumlah modul saat ini untuk course tersebut
        $existingModules = $moduleModel->where('course_id', $courseId)->countAllResults();

        // Tentukan module_number baru = total + 1
        $newModuleNumber = $existingModules + 1;

        // Ambil title dari POST
        $title = $this->request->getPost('title');

        // Insert data modul baru
        $moduleModel->insert([
            'course_id' => $courseId,
            'module_number' => $newModuleNumber,
            'title' => $title,
        ]);

        return redirect()->to('admin/courses/view/' . $courseId)->with('success', 'Modul baru berhasil ditambahkan.');
    }

}
