<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'position',
        'cover_letter_message',
        'resume',
        'status',
    ];
}
