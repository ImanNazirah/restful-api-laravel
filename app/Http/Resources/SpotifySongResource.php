<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SpotifySongResource extends JsonResource
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
        return[
            'id'=>$this->id,
            'track_name'=>$this->track_name,
            'artist_name'=>$this->artist_name,
            'genre'=>$this->genre,
            'popularity'=>$this->popularity     
        ];
    }
}
