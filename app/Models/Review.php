<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'item_id', 'item_type', 'comment', 'rating'];

    public function user(): BelongsTo
    {
        // return $this->belongsTo(User::class, 'user_id');

        return $this->belongsTo(User::class);
    }

    public function item(): MorphTo
    {
        return $this->morphTo();
    }
}
