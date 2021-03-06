<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BreedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'specie' => new SpeciesResource($this->whenLoaded('specie')),
            'name' => $this->name,
            'status' => $this->status,
        ];
    }
}
