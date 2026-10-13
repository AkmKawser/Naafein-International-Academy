<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'content',
        'attachment_url',
        'publish_date',
        'is_pinned',
        'status',
    ];

    protected $casts = [
        'publish_date' => 'date',
        'is_pinned' => 'boolean',
        'status' => 'boolean',
    ];
}
