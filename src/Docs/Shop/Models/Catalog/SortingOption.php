<?php

namespace Webkul\RestApi\Docs\Shop\Models\Catalog;

/**
 * @OA\Schema(
 *     title="SortingOption",
 *     description="Filterable attribute option model",
 * )
 */
class SortingOption
{
    /**
     * @OA\Property(
     *     title="Title",
     *     description="Title",
     *     example="From A-Z",
     *     type="string"
     * )
     *
     * @var string
     */
    public $title;

    /**
     * @OA\Property(
     *     title="Value",
     *     description="Value",
     *     example="name-asc",
     *     type="string"
     * )
     *
     * @var string
     */
    public $value;

    /**
     * @OA\Property(
     *     title="Sort",
     *     description="Sort",
     *     example="sort",
     *     type="name"
     * )
     *
     * @var string
     */
    public $sort;

    /**
     * @OA\Property(
     *     title="Order Direction",
     *     description="Order Direction",
     *     type="string",
     *     example="asc"
     * )
     *
     * @var string
     */
    public $order;

    /**
     * @OA\Property(
     *     title="Sorting order",
     *     description="Sorting order",
     *     type="integer",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    public $position;
}
