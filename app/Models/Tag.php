<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'user_id'
    ];

    public function books()
    {
        return $this->belongsToMany(
            Book::class,
            'books_tags',
            'tag_id',
            'book_id',
            'id',
            'id'
        );
    }
}
