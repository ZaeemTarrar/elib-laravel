<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'rate',
        'book_id',
        'user_id'
    ];

    public function book()
    {
        return $this->belongTo('App\Book');
    }

    public function user()
    {
        return $this->belongTo('App\User');
    }

}
