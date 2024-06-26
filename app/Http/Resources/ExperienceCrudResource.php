<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExperienceCrudResource extends JsonResource
{
   
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'title'         => $this->title,
            'number'        => $this->number,
        ];
    }
}
