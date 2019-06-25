<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'message',
        'status',
        'user_id',
        'notificationType_id'
    ];

    public function user()
    {
        return $this->belongTo('App\User');
    }

    public function notificationType()
    {
        return $this->belongTo('App\NotificationType');
    }
}
