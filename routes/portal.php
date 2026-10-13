<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Portal\Student\DashboardController as StudentDashboardController;
use App\Http\Controllers\Portal\Student\ResultController as StudentResultController;
use App\Http\Controllers\Portal\Student\RoutineController as StudentRoutineController;
use App\Http\Controllers\Portal\Teacher\DashboardController as TeacherDashboardController;
use App\Http\Controllers\Portal\Teacher\AttendanceController as TeacherAttendanceController;
use App\Http\Controllers\Portal\Teacher\MarkEntryController as TeacherMarkEntryController;

/*
|--------------------------------------------------------------------------
| Authenticated Portals (Student & Teacher)
|--------------------------------------------------------------------------
*/

// Student Portal Guard
Route::prefix('portal/student')->middleware(['auth', 'role:student'])->group(function () {
    Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');
    Route::get('/results', [StudentResultController::class, 'index'])->name('student.results');
    Route::get('/routine', [StudentRoutineController::class, 'index'])->name('student.routine');
});

// Teacher Portal Guard
Route::prefix('portal/teacher')->middleware(['auth', 'role:teacher'])->group(function () {
    Route::get('/dashboard', [TeacherDashboardController::class, 'index'])->name('teacher.dashboard');
    Route::get('/attendance', [TeacherAttendanceController::class, 'index'])->name('teacher.attendance');
    Route::post('/attendance/store', [TeacherAttendanceController::class, 'store'])->name('teacher.attendance.store');
    Route::get('/marks', [TeacherMarkEntryController::class, 'index'])->name('teacher.marks');
    Route::post('/marks/store', [TeacherMarkEntryController::class, 'store'])->name('teacher.marks.store');
});
