<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillable = [
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
