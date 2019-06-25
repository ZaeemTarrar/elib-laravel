<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $fillable = [
        'book_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongTo('App\User');
    }

    public function book()
    {
        return $this->belongTo('App\Book');
    }

}
