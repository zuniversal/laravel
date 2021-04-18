<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 2-2
class StudentController extends Controller
{
    //
    public function index()
    {
        // $students = \App\Student::all();;
        // return 'zyb';
        return view('/student', [
            // 'students' => $students,
            'students' => [
                // 'name' => ['zyb1', 'xxx'],
                'name' => 'zyb1',
                'name' => 'zyb2',
                'name' => 'zyb3',
            ],
            'names' => 'zybs',
        ]);
    }
}
