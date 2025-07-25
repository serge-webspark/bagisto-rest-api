<?php

namespace Webkul\RestApi\Docs\Shop\Models\Catalog;

/**
 * @OA\Schema(
 *     title="Category",
 *     description="Category model",
 * )
 */
class Category
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
     *     title="Display Mode",
     *     description="Category's content display mode",
     *     example="products_and_description",
     *     enum={"products_and_description", "products_only", "description_only"}
     * )
     *
     * @var string
     */
    public $display_mode;

    /**
     * @OA\Property(
     *     title="Description",
     *     description="Category's description",
     *     example="Lorem Ipsum is simply dummy text of the printing and typesetting industry."
     * )
     *
     * @var string
     */
    public $description;

    /**
     * @OA\Property(
     *     title="Banner URL",
     *     description="Category's banner URL",
     *     example="http://localhost/public/storage/category/{category_id}/{image_name}.jpg",
     *     type="string",
     *     format="uri"
     * )
     *
     * @var string
     */
    public $banner_url;

    /**
     * @OA\Property(
     *     title="Category Icon URL",
     *     description="Category's icon URL",
     *     example="http://localhost/public/storage/velocity/category_icon_path/{category_id}/{image_name}.png",
     *     type="string",
     *     format="uri"
     * )
     *
     * @var string
     */
    public $logo_url;

    /**
     * @OA\Property(
     *     title="Additional",
     *     description="Category's additional information",
     *     example=null
     * )
     *
     * @var object
     */
    public $additional;

    /**
     * @OA\Property(
     *     title="Position",
     *     description="Category's position in the list",
     *     type="integer",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    public $position;

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    public $created_at;

    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    public $updated_at;
}
