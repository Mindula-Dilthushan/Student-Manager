<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'age' => 'required|numeric',
            'status' => 'required',
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->age = $request->age;
        $student->status = $request->status;
        $student->save();

        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
        //
    }
}
