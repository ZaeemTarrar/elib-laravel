<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'name',
        'active',
    ];

    public function book()
    {
        return $this->hasMany('App\Book');
    }

}
