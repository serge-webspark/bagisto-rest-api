<?php

namespace Webkul\RestApi\Docs\Shop\Models\Catalog;

use Webkul\RestApi\Http\Resources\V1\Shop\Catalog\CategoryTreeResource;

/**
 * @OA\Schema(
 *     title="Category Tree Resource",
 *     description="Category Tree Resource",
 * )
 */
class CategoryTree
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=2
     * )
     *
     * @var int
     */
    public $id;

    /**
     * @OA\Property(
     *     title="Parent ID",
     *     description="Parent ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    public $parent_id;

    /**
     * @OA\Property(
     *     title="Name",
     *     description="Category's name",
     *     example="Women Apparel"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *     title="Slug",
     *     description="Category's slug",
     *     example="women-apparel"
     * )
     *
     * @var string
     */
    public $slug;

    /**
     * @OA\Property(
     *     title="Slug",
     *     description="Category's slug",
     *     example="http://example.com/women-apparel"
     * )
     *
     * @var string
     */
    public $url;

    /**
     * @OA\Property(
     *     title="Children categories",
     *     description="Children categories"
     *     type="array",
     *     @OA\Items(ref="#/components/schemas/CategoryTree")
     * )
     *
     * @var array<CategoryTree>
     */
    public $children;
}
