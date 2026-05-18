<?php

namespace App\Models;

use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['title', 'image'];
    protected $casts = [
        'image' => 'array',
    ];
}
