<?php

namespace Webkul\RestApi\Http\Resources\V1\Shop\Catalog;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryTreeResource extends JsonResource
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
            'id'        => $this->id,
            'parent_id' => $this->parent_id,
            'name'      => $this->name,
            'slug'      => $this->slug,
            'url'       => $this->url,
            'status'    => $this->status,
            'banner_url' => $this->banner_url,
            'logo_url'   => $this->logo_url,
            'children'  => self::collection($this->children),
        ];
    }
}
