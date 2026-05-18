<?php

namespace App\Models;
use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visimisi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['visi', 'misi', 'image'];
    protected $casts = [
        'image' => 'array',
    ];
}
