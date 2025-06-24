<?php

namespace Webkul\RestApi\Docs\Shop\Models\Catalog;

/**
 * @OA\Schema(
 *     title="FilterableAttributeOption",
 *     description="Filterable attribute option model",
 * )
 */
class FilterableAttributeOption
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     type="integer",
     *     example=1
     * )
     *
     * @var int
     */
    public $id;

    /**
     * @OA\Property(
     *     title="Sorting",
     *     description="Sorting order",
     *     type="integer",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    public $sort_order;

    /**
     * @OA\Property(
     *     title="Label",
     *     description="Option label, based on locale",
     *     example="Red",
     *     type="string"
     * )
     *
     * @var string
     */
    public $label;
}
