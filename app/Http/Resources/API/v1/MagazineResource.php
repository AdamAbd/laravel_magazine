<?php

namespace App\Http\Resources\API\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class MagazineResource extends JsonResource
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
            'attributes' => [
                'title' => $this->title,
                'picture' => $this->picture,
                'preview_link' => $this->preview_link,
                'category' => $this->category,
                'synopsis' => $this->synopsis,
                'language' => $this->language,
                'publisher' => $this->publisher,
                'price' => $this->price,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ]
        ];
    }
}
