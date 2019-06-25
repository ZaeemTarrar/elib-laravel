<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Notification extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'message' => $this->message,
            'status' => $this->status,
            'user_id' => $this->user_id,
            'notificationType_id' => $this->notificationType_id
        ];
    }
}
