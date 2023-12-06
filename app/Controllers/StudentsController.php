<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Students;

class StudentsController extends BaseController
{
    protected $studentModel;

    public function __construct(){
        $this->studentModel = new Students();
    }

    public function index()
    {
        $students = $this->studentModel->orderBy('name')->findAll();
        $data = [
            "title" => "List of Students",
            "students" => $students
        ];
        return view("layout/header").
        view("students/index", $data).
        view("layout/footer");
    }
}
