<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function create(): View
    {
        return view('students.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'student_number' => ['required', 'string', 'max:50', 'unique:students,student_number'],
            'email' => ['nullable', 'email', 'max:255'],
            'class_name' => ['required', 'string', 'max:100'],
        ], [
            'name.required' => 'Vul de naam van de student in.',
            'student_number.required' => 'Vul een studentnummer in.',
            'student_number.unique' => 'Dit studentnummer is al in gebruik.',
            'email.email' => 'Vul een geldig e-mailadres in.',
            'class_name.required' => 'Vul de klas van de student in.',
        ]);

        Student::create($validated);

        return to_route('dashboard')->with('success', 'De student is succesvol toegevoegd.');
    }
}
