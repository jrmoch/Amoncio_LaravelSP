<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show the student list
    public function index()
    {
        return view('students.index');
    }

    // Show the add student form
    public function create()
    {
        return view('students.create');
    }

    // Show a single student profile
    public function show($id)
    {
        return view('students.show');
    }

    // Show the edit form for a student
    public function edit($id)
    {
        return view('students.edit');
    }
}
