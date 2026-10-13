<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class PublicApiController extends Controller
{
    /**
     * Corresponds to https://www.nia.edu.bd/get-teachers?page=1&per_page=9
     */
    public function getTeachers(Request $request)
    {
        $perPage = $request->get('per_page', 9);

        $teachers = Employee::where('staff_category', 'teaching')
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->paginate($perPage);

        return response()->json($teachers);
    }

    /**
     * Corresponds to https://www.nia.edu.bd/expired-check
     */
    public function checkLicenseExpiry()
    {
        return response()->json([
            'expired' => false,
            'msgHead' => null,
            'msgBody' => null,
        ]);
    }

    /**
     * Corresponds to https://www.nia.edu.bd/setup-check
     */
    public function checkSystemSetup()
    {
        return response()->json(1);
    }
}
