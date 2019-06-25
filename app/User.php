<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','active','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function view()
    {
        return $this->hasMany('App\View');
    }

    public function favourite()
    {
        return $this->hasMany('App\Favourite');
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
