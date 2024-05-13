<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class QuizController extends Controller
{
    public function Quiz()
    {
        return view("quiz",[
            "title" => "Quiz"
        ]);
    }
}
