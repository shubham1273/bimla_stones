<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GetInTouch extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'company_name',
        'looking_for',
        'email',
        'location',
        'specific_detail',
        'reference_image',
        'status',
    ];
}
