<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function reviews(): MorphMany
    {
        return $this->morphMany(Review::class, 'item');
    }
}
