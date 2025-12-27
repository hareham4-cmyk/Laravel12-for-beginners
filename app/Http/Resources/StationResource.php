<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return  [
            'id' => $this->id ,
            'name' => $this->name ,
            'parentId' => $this->parent_id,
            'longitude' => $this->longitude ,
            'latitude' => $this->latitude,
            'workTimeId' => $this->worktime_id,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'stationsChildren' => StationResource::collection($this->whenLoaded('children'))
        ];
    }
}
