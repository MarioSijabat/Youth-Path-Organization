<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'full_name',
        'date_of_birth',
        'gender',
        'email',
        'phone_number',
        'country',
        'motivation',
        'source',
    ];
}