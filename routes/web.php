<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\CurriculumController;
use App\Http\Controllers\Web\AdmissionWebController;
use App\Http\Controllers\Web\NoticeWebController;
use App\Http\Controllers\Web\ContactController;

/*
|--------------------------------------------------------------------------
| Public Web Routes (No Auth Required)
|--------------------------------------------------------------------------
| Reference: https://www.nia.edu.bd/
|
*/

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Us
Route::prefix('about')->group(function () {
    Route::get('/history-of-nia', [AboutController::class, 'history'])->name('about.history');
    Route::get('/why-our-school-to-choose', [AboutController::class, 'whyChooseUs'])->name('about.why_choose');
    Route::get('/message-from-the-chairman', [AboutController::class, 'chairmanMessage'])->name('about.chairman');
    Route::get('/message-from-the-principal', [AboutController::class, 'principalMessage'])->name('about.principal');
});

// Direct alias routes matching nia.edu.bd URLs
Route::get('/history-of-nia', [AboutController::class, 'history']);
Route::get('/why-our-school-to-choose', [AboutController::class, 'whyChooseUs']);
Route::get('/message-from-the-chairman', [AboutController::class, 'chairmanMessage']);
Route::get('/message-from-the-principal', [AboutController::class, 'principalMessage']);

// Administration
Route::get('/governing-body', [AboutController::class, 'governingBody'])->name('admin.governing_body');
Route::get('/staffs', [AboutController::class, 'nonTeachingStaffs'])->name('admin.staffs');

// Academic Pages
Route::get('/student-evaluation-process', [HomeController::class, 'evaluationProcess'])->name('academic.evaluation');
Route::get('/academic-calendar', [HomeController::class, 'academicCalendar'])->name('academic.calendar');
Route::get('/ramadan-calendar', [HomeController::class, 'ramadanCalendar'])->name('academic.ramadan');
Route::get('/news', [NoticeWebController::class, 'newsIndex'])->name('news.index');
Route::get('/news/{id}', [NoticeWebController::class, 'newsDetail'])->name('news.detail');
Route::get('/result', [HomeController::class, 'resultSearch'])->name('academic.result');
Route::get('/notices', [NoticeWebController::class, 'noticeIndex'])->name('notices.index');
Route::get('/notice/{id}', [NoticeWebController::class, 'noticeDetail'])->name('notices.detail');
Route::get('/events', [NoticeWebController::class, 'eventsIndex'])->name('events.index');
Route::get('/event/{id}', [NoticeWebController::class, 'eventDetail'])->name('events.detail');
Route::get('/students-list', [HomeController::class, 'studentsList'])->name('academic.students');
Route::get('/class-routine', [HomeController::class, 'classRoutine'])->name('academic.routine');

// Curriculum
Route::get('/early-years-ey', [CurriculumController::class, 'earlyYears'])->name('curriculum.ey');
Route::get('/primary-years-programme-pyp', [CurriculumController::class, 'pyp'])->name('curriculum.pyp');
Route::get('/middle-year-programme-myp-high-years-programme-hyp', [CurriculumController::class, 'mypHyp'])->name('curriculum.myp_hyp');
Route::get('/hifzul-quraan-curriculum', [CurriculumController::class, 'hifzCurriculum'])->name('curriculum.hifz');

// Discipline & Uniform
Route::get('/uniform-of-students', [HomeController::class, 'uniform'])->name('discipline.uniform');

// Admission Pipeline
Route::get('/admission-procedure', [AdmissionWebController::class, 'procedure'])->name('admission.procedure');
Route::get('/admission-form', [AdmissionWebController::class, 'form'])->name('admission.form');
Route::get('/online/admission-v2', [AdmissionWebController::class, 'formV2'])->name('admission.v2');
Route::post('/online/admission/submit', [AdmissionWebController::class, 'submit'])->name('admission.submit');

// Blogs & Articles
Route::get('/blog/{slug}', [NoticeWebController::class, 'blogDetail'])->name('blog.detail');

// Teacher Profile Detail
Route::get('/teacher/data/{id}', [HomeController::class, 'teacherDetail'])->name('teacher.profile');

// Gallery
Route::get('/gallery', [HomeController::class, 'galleryIndex'])->name('gallery.index');
Route::get('/gallery/{id}', [HomeController::class, 'galleryShow'])->name('gallery.show');

// Contact
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact-us/send', [ContactController::class, 'send'])->name('contact.send');
