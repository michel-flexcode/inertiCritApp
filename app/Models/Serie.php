<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function reviews()
    {
        return $this->morphMany(Review::class, 'item');
    }
}
