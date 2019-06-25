<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Book extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);

       return [
        'id' => $this->id,
        'name' => $this->name,
        'author' => $this->author,
        'file'=>$this->file,
        'references' =>$this->references,
        'active'=>$this->active,
        'category_id'=>$this->category_id,
        'grade_id' => $this->grade_id
    ];
    }
}
