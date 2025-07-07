<?php

namespace Webkul\RestApi\Http\Resources\V1\Shop\Catalog;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerReviewResource extends JsonResource
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
            'title'      => $this->title,
            'rating'     => number_format($this->rating, 1, '.', ''),
            'comment'    => $this->comment,
            'name'       => $this->name,
            'status'     => $this->status,
            'product'    => new ReviewedProductResource($this->product),
            'customer'   => $this->when($this->customer_id, new ReviewerResource($this->customer)),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
