<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'description',
        'address',
        'phone',
        'email',
        'quick_links',
        'service_links',
        'social_media_links',
        'copyright_text',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'quick_links' => 'array',
        'service_links' => 'array',
        'social_media_links' => 'array',
    ];
}
