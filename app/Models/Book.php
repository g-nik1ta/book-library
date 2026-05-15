<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'publisher',
        'author',
        'genre',
        'published_at',
        'word_count',
        'price_usd',
    ];
}
