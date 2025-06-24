<?php

declare(strict_types=1);

namespace Webkul\RestApi\Http\Resources\V1\Shop\Catalog;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Webkul\RestApi\Dto\CatalogFilterOptions;

/**
 * @mixin CatalogFilterOptions
 */
final class CategoryFilterOptionsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'min_price' => $this->minPrice,
            'max_price' => $this->maxPrice,
            'attributes' => FilterableAttributeResource::collection($this->attributes),
            'sorting' => $this->sortingOptions,
        ];
    }
}