<?php

declare(strict_types=1);

namespace Webkul\RestApi\Docs\Shop\Models\Catalog;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;

/**
 * @OA\Schema(
 *     title="CatalogFilterOptions",
 *     description="Catalog filter options model",
 * )
 */
final readonly class CatalogFilterOptions
{
    /**
     * @OA\Property(
     *     title="Min price",
     *     description="Min price",
     *     type="float",
     *     example=10.99
     * )
     */
    public float $min_price;

    /**
     * @OA\Property(
     *     title="Max price",
     *     description="Max price",
     *     type="float",
     *     example=1000
     * )
     */
    public float $max_price;

    /**
     * @OA\Property(
     *     title="Attributes",
     *     description="Filterable attributes",
     *     type="array",
     *     @OA\Items(ref="#/components/schemas/FilterableAttribute")
     * )
     */
    public EloquentCollection $attributes;

    /**
     * @OA\Property(
     *     title="Sorting",
     *     description="Sorting options",
     *     type="array",
     *     @OA\Items(ref="#/components/schemas/SortingOption")
     * )
     */
    public Collection $sorting;
}