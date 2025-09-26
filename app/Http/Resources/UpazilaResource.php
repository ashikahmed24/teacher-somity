<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UpazilaResource extends JsonResource
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
            'district_id' => $this->district_id,
            'district' => $this->whenLoaded('district', function () {
                return [
                    'name' => $this->district->name,
                    'bn_name' => $this->district->bn_name,
                ];
            }),
            'name' => $this->name,
            'bn_name' => $this->bn_name,
            'url' => $this->url,
            'created_at' => $this->created_at?->toDateTimeString(),
            'updated_at' => $this->updated_at?->toDateTimeString(),
        ];
    }
}
