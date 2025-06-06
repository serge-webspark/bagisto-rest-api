<?php

namespace Webkul\RestApi\Http\Resources\V1\Admin\Customer;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerAddressResource extends JsonResource
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
            'id'           => $this->id,
            'first_name'   => $this->first_name,
            'last_name'    => $this->last_name,
            'company_name' => $this->company_name,
            'vat_id'       => $this->vat_id,
            'address'      => $this->address,
            'country'      => $this->country,
            'country_name' => core()->country_name($this->country),
            'state'        => $this->state,
            'city'         => $this->city,
            'postcode'     => $this->postcode,
            'phone'        => $this->phone,
            'email'        => $this->email,
            'is_default'   => $this->default_address,
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
        ];
    }
}
