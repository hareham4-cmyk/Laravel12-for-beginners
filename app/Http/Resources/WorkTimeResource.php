<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkTimeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'from'=> $this->from ,
            'to'=> $this->to,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'stations' =>WorkTimeResource::collection($this->whenLoaded('stations')),


        ];
    }
}
