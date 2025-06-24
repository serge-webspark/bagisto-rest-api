<?php

declare(strict_types=1);

namespace Webkul\RestApi\Http\Resources\V1\Shop\Catalog;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Webkul\Attribute\Contracts\Attribute;

/**
 * @mixin Attribute
 */
final class FilterableAttributeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'position' => $this->position,
            'options' => FilterableAttributeOptionResource::collection($this->options),
        ];
    }
}
