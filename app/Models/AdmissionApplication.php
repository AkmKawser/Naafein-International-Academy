<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'application_no',
        'student_name',
        'dob',
        'gender',
        'blood_group',
        'guardian_name',
        'guardian_phone',
        'guardian_email',
        'address',
        'previous_school',
        'payment_status',
        'application_status',
        'documents_path',
        'applied_at',
    ];

    protected $casts = [
        'dob' => 'date',
        'applied_at' => 'datetime',
    ];
}
