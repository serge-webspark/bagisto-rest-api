<?php

namespace Webkul\RestApi\Docs\Shop\Models\Catalog;

/**
 * @OA\Schema(
 *     title="FilterableAttribute",
 *     description="Filterable attribute model",
 * )
 */
class FilterableAttribute
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    public $id;

    /**
     * @OA\Property(
     *     title="Name",
     *     description="Attribute name, based on locale",
     *     example="Color"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *     title="Code",
     *     description="Attribute unique code",
     *     example="color"
     * )
     *
     * @var string
     */
    public $code;

    /**
     * @OA\Property(
     *     title="Position",
     *     description="Attribute's position",
     *     example=1
     * )
     *
     * @var int
     */
    public $position;

    /**
     * @OA\Property(
     *     title="Options",
     *     description="Attribute's options",
     *     type="array",
     *     @OA\Items(ref="#/components/schemas/FilterableAttributeOption")
     * )
     *
     * @var FilterableAttributeOption[]
     */
    public $options;
}
