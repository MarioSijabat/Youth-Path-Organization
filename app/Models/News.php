<?php

namespace App\Models;
use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'image', 'user_id', 'slug'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
