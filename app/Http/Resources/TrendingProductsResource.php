<?php

namespace App\Http\Resources;

use App\Models\Business;
use Illuminate\Http\Resources\Json\JsonResource;

class TrendingProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $trending_products = Business::active()->isTrending()->get();

        return [
            'id' => $this->id,
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'products' => ProductResource::collection($trending_products),
        ];
    }
}
