<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index', [
            'students' => Student::all(),
        ]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer', 'min:1'],
            'address' => ['required', 'string', 'max:255'],
        ]);

        Student::create($data);

        return redirect()->route('dashboard')->with('success', 'Student created successfully!');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer', 'min:1'],
            'address' => ['required', 'string', 'max:255'],
        ]);

        $student->update($data);

        return redirect()->route('dashboard')->with('success', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('dashboard')->with('success', 'Student deleted successfully!');
    }
}
