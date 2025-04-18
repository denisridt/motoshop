<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    //Преобразует ресурс в массив.
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'image' => $this->image,
            'title' => $this->title,
            'comment' => $this->comment,
            'price' => $this->price,
            'year' => $this->year,
            'type_category_id' => $this->type_category_id,
        ];
    }
}
