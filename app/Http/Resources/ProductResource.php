<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'price' => $this->price,
            'discount' => $this->discount,
            'brand_id' => $this->brand_id,
            'category_id' => $this->category_id,
            'image' => $this->medias->first() == null ? : 'http://localhost:8000/public/' . $this->medias->first()->image,

        ];
    }
}
