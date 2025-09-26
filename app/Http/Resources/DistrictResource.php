<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DistrictResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'division_id' => $this->division_id,
            'division' => $this->whenLoaded('division', function () {
                return [
                    'name' => $this->division->name,
                    'bn_name' => $this->division->bn_name,
                ];
            }),

            'name' => $this->name,
            'bn_name' => $this->bn_name,
            'lat' => $this->lat,
            'lon' => $this->lon,
            'url' => $this->url,
            'created_at' => $this->created_at?->toDateTimeString(),
            'updated_at' => $this->updated_at?->toDateTimeString(),
        ];
    }
}
