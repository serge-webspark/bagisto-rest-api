<?php

namespace Webkul\RestApi\Http\Resources\V1\Admin\Settings;

use Illuminate\Http\Resources\Json\JsonResource;

class LocaleResource extends JsonResource
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
            'id'         => $this->id,
            'code'       => $this->code,
            'name'       => $this->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'logo_url'   => $this->logo_url,
        ];
    }
}
