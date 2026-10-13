<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Notice;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 1. School Information / Settings
        $setting = Setting::first();

        // 2. Latest Notices (pinned first, then chronological)
        $notices = Notice::where('status', true)
            ->orderBy('is_pinned', 'desc')
            ->orderBy('publish_date', 'desc')
            ->take(10)
            ->get();

        // 3. Featured Teachers for carousel
        $teachers = Employee::where('staff_category', 'teaching')
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->take(12)
            ->get();

        return view('web.home', compact('setting', 'notices', 'teachers'));
    }

    public function evaluationProcess()
    {
        return view('web.academic.evaluation');
    }

    public function academicCalendar()
    {
        return view('web.academic.calendar');
    }

    public function ramadanCalendar()
    {
        return view('web.academic.ramadan');
    }

    public function resultSearch()
    {
        return view('web.academic.result');
    }

    public function classRoutine()
    {
        return view('web.academic.routine');
    }

    public function studentsList()
    {
        return view('web.academic.students');
    }

    public function uniform()
    {
        return view('web.discipline.uniform');
    }

    public function teacherDetail($id)
    {
        $teacher = Employee::findOrFail($id);
        return view('web.teachers.show', compact('teacher'));
    }

    public function galleryIndex()
    {
        return view('web.gallery.index');
    }

    public function galleryShow($id)
    {
        return view('web.gallery.show', compact('id'));
    }
}
