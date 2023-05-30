<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
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
            'website_title'          => $this->website_title,
            'address'                => $this->address,
            'whatsapp'               => $this->whatsapp,
            'copyrights'             => $this->copyrights,
            'meta_title'             => $this->meta_title,
            'meta_description'       => $this->meta_description,
            'meta_keywords'          => $this->meta_keywords,
            'footer_description'     => $this->footer_description,
            'logo'                   => $this->logo,
            'white_logo'             => $this->white_logo,
            'favicon'                => $this->favicon,
            // 'contact_img'            => $this->contact_img,
            'footer_img'             => $this->footer_img,
            'breadcrumb'             => $this->breadcrumb,
            'map'                    => $this->map,

        ];
    }
}
