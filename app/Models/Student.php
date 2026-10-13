<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'guardian_id',
        'class_id',
        'section_id',
        'student_id_card',
        'roll_no',
        'full_name',
        'dob',
        'gender',
        'blood_group',
        'photo_url',
        'admission_date',
        'status',
    ];

    protected $casts = [
        'dob' => 'date',
        'admission_date' => 'date',
        'status' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function examResults()
    {
        return $this->hasMany(ExamResult::class);
    }
}
