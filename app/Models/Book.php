<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'category_id',
        'price',
        'image',
        'author_id',
        'description'
    ];

    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,
            'books_tags',
            'book_id',
            'tag_id',
            'id',
            'id'
        );
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function offer()
    {
        return $this->hasOne(Offer::class);
    }
}
