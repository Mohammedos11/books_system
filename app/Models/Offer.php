<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'book_id',
        'offer_price',
        'start_date',
        'end_date',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
