<?php

declare(strict_types=1);

namespace Webkul\RestApi\Dto;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;

final readonly class CatalogFilterOptions
{
    public function __construct(
        public float $minPrice,
        public float $maxPrice,
        public EloquentCollection $attributes,
        public Collection $sortingOptions,
    ) {}
}