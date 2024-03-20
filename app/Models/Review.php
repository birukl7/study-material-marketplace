<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'rating',
    ];

   public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
