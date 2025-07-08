<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUsSection extends Model
{
    protected $fillable = [
        'title',
        'description',
        'media',
        'media_type',
        'page_key',
    ];
}
