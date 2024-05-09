<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(){
        return view('teacher.quizzes.index');
    }

    public function create(){
        return view('teacher.quizzes.create');
    }

    public function edit(){
        
    }
}
