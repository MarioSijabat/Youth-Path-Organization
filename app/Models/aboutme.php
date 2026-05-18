<?php

namespace App\Models;
use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutme extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'image' => 'array',
    ];
}
