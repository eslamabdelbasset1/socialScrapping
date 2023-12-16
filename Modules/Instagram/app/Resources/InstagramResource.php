<?php

namespace Modules\Instagram\app\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstagramResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return [
            'Followers' => $this->resource['0'],
            'Following' => $this->resource['1'],
            'Posts' => $this->resource['2'],
        ];
    }
}
