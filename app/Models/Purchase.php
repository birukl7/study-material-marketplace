<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'resource_id',
        'buyer_id',
        'purchase_date',
    ];
    public function resource(): BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }

    public function buyer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }
}
