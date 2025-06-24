<?php

namespace App\Controllers;

class AdminCourseController extends BaseController
{
    public function index(): string
    {
        $model = new \App\Models\CourseModel();
        $courses = $model->findAll();

        return view('admin/manage_courses', ['courses' => $courses]);
    }

    public function view($id)
    {
        $courseModel = new \App\Models\CourseModel();
        $moduleModel = new \App\Models\ModuleModel();

        $course = $courseModel->find($id);
        if (!$course) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Course not found.');
        }

        $modules = $moduleModel->where('course_id', $id)
            ->orderBy('module_number', 'ASC')
            ->findAll();

        return view('admin/view_course_detail', [
            'course' => $course,
            'modules' => $modules
        ]);
    }
    public function updateDescription($id)
    {
        $courseModel = new \App\Models\CourseModel();

        $courseModel->update($id, [
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('admin/courses/view/' . $id)->with('success', 'Deskripsi berhasil diperbarui.');
    }

public function updateThumbnail($courseId)
{
    $file = $this->request->getFile('thumbnail');

    if ($file && $file->isValid() && !$file->hasMoved()) {
        $newName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/assets/images', $newName);

        $model = new \App\Models\CourseModel();
        $model->update($courseId, ['thumbnail' => $newName]);

        return redirect()->back()->with('success', 'Thumbnail berhasil diperbarui.');
    }

    return redirect()->back()->with('error', 'Gagal mengunggah thumbnail.');
}


    public function create()
    {
        $title = $this->request->getPost('title');
        $courseModel = new \App\Models\CourseModel();

        $courseModel->insert(['title' => $title, 'thumbnail' => 'default.png']);

        return redirect()->to('admin/courses')->with('success', 'Course created successfully.');
    }
public function delete($id)
{
    $courseModel = new \App\Models\CourseModel();
    $courseModel->delete($id);

    return redirect()->to('admin/courses')->with('success', 'Course deleted successfully.');
}

}
