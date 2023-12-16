<?php

namespace Modules\Instagram\app\Resources;


use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class InstagramCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'posts' => $this->posts,
            'followers' => $this->followers,
            'following' => $this->following,
        ];
    }
}
