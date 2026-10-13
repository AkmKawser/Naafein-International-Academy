<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_name',
        'eiin_no',
        'email',
        'phone',
        'address',
        'logo_url',
        'facebook_url',
        'youtube_url',
        'playstore_app_url',
        'chairman_message',
        'principal_message',
    ];
}
