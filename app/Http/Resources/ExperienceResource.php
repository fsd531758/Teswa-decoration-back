<?php

namespace App\Http\Resources;

use App\Models\Experience;
use Illuminate\Http\Resources\Json\JsonResource;

class ExperienceResource extends JsonResource
{
    public function toArray($request)
    {
        $experiences = Experience::active()->get(); 
        return [
            'id'           => $this->id,
            'title'        => $this->title,
            'sub_title'    => $this->sub_title,
            'description'  => $this->description,
            'image'        => $this->image,
            'experiences'   => ExperienceCrudResource::collection($experiences),

        ];
    }
}
