<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationType extends Model
{
    protected $fillable = [
        'name'
   ];

   public function notification()
   {
        return $this->hasMany('App\Notification');
   }
}
