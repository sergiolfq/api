<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Poll extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /*return ['title' => mb_strimwidth($this->title,0,5,'...')
        ]; */
        return parent::toArray($request);
    }
}
