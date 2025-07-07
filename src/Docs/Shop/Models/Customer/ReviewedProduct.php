<?php

declare(strict_types=1);

namespace Webkul\RestApi\Docs\Shop\Models\Customer;

/**
 * @OA\Schema(
 *     title="ReviewedProduct",
 *     description="ReviewedProduct model",
 * )
 */
class ReviewedProduct
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
     *     title="SKU",
     *     description="Product SKU",
     *     example="men-t-shirt"
     * )
     *
     * @var string
     */
    public $sku;

    /**
     * @OA\Property(
     *     title="Type",
     *     description="Product type",
     *     enum={"simple", "configurable", "virtual", "grouped", "downloadable", "bundle"}
     * )
     *
     * @var string
     */
    public $type;

    /**
     * @OA\Property(
     *     title="Name",
     *     description="Product name",
     *     example="Men T-Shirt"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *     title="URL Key",
     *     description="Product URL key",
     *     example="men-t-shirt"
     * )
     *
     * @var string
     */
    public $url_key;

    /**
     * @OA\Property(
     *     title="Base Image",
     *     description="Product's base image",
     *     type="object",
     *     @OA\Property(property="small_image_url", type="string", example="http://localhost/public/vendor/webkul/ui/assets/images/product/small-product-placeholder.webp"),
     *     @OA\Property(property="medium_image_url", type="string", example="http://localhost/public/vendor/webkul/ui/assets/images/product/meduim-product-placeholder.webp"),
     *     @OA\Property(property="large_image_url", type="string", example="http://localhost/public/vendor/webkul/ui/assets/images/product/large-product-placeholder.webp"),
     *     @OA\Property(property="original_image_url", type="string", example="http://localhost/public/vendor/webkul/ui/assets/images/product/original-product-placeholder.webp")
     * )
     *
     * @var array
     */
    public $base_image;
}
