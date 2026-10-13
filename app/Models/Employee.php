<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'designation_id',
        'department_id',
        'employee_code',
        'name',
        'gender',
        'phone',
        'email',
        'highest_qualification',
        'photo',
        'designation_title',
        'staff_category', // 'teaching', 'non_teaching', 'governing_body'
        'date_of_joining',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'date_of_joining' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
