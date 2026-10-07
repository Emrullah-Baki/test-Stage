<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $students = Student::query()
            ->latest()
            ->limit(5)
            ->get();

        return view('dashboard', [
            'students' => $students,
            'studentCount' => Student::count(),
            'newStudentCount' => Student::where('created_at', '>=', now()->startOfWeek())->count(),
            'classCount' => Student::query()->distinct()->count('class_name'),
            'monthlyStudentCount' => Student::where('created_at', '>=', now()->startOfMonth())->count(),
        ]);
    }
}
