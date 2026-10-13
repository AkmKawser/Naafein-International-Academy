<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PublicApiController;
use App\Http\Controllers\Api\AttendanceApiController;
use App\Http\Controllers\Api\RoutineApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Used by AJAX calls on nia.edu.bd and Mobile App (EdTeco)
|
*/

// Public AJAX endpoints observed on nia.edu.bd
Route::get('/get-teachers', [PublicApiController::class, 'getTeachers']);
Route::get('/expired-check', [PublicApiController::class, 'checkLicenseExpiry']);
Route::get('/setup-check', [PublicApiController::class, 'checkSystemSetup']);

// Protected Mobile App APIs (Sanctum)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/student/attendance', [AttendanceApiController::class, 'studentAttendance']);
    Route::get('/student/routine', [RoutineApiController::class, 'studentRoutine']);
    Route::get('/student/results', [PublicApiController::class, 'studentResults']);
    
    Route::post('/teacher/attendance/mark', [AttendanceApiController::class, 'markAttendance']);
});
