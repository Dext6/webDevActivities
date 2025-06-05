<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Import the Student model

class StudentController extends Controller
{
    public function index()
    {
        // Get all students from the database
        $students = Student::all();

        //dd($students);

        // Return a view and pass the students data
        return view('students.index', compact('students'));
    }
}
