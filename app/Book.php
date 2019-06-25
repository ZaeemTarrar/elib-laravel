<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'author',
        'file',
        'references',
        'active',
        'category_id',
        'grade_id'
    ];

    public function category()
    {
        return $this->belongTo('App\Category');
    }

    public function grade()
    {
        return $this->belongTo('App\Grade');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Language');
    }

    public function view()
    {
        return $this->hasMany('App\View');
    }

    public function favourite()
    {
        return $this->hasMany('App\favourite');
    }

    public function rating()
    {
        return $this->hasMany('App\Rating');
    }

    public function bookmark()
    {
        return $this->hasMany('App\Bookmark');
    }

}
