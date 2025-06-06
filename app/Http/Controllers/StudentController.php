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

    public function create()
    {
    // Show the create student form
    return view('students.create');
    }

    public function store(Request $request)
    {
    // Validate the incoming data
    $request->validate([
        'fname' => 'required|string|max:255',
        'age' => 'required|integer|min:1',
        'address' => 'required|string|max:255',
    ]);

    // Create and save new student
    \App\Models\Student::create([
        'fname' => $request->fname,
        'age' => $request->age,
        'address' => $request->address,
    ]);

    // Redirect to students list with success message
    return redirect('/students')->with('success', 'Student created successfully!');
    }





}
