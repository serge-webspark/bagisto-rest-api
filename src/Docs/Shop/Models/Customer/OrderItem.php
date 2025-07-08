<?php

namespace Webkul\RestApi\Docs\Shop\Models\Customer;

/**
 * @OA\Schema(
 *     title="OrderItem",
 *     description="OrderItem model",
 * )
 */
class OrderItem
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
    private $id;

    /**
     * @OA\Property(
     *     title="SKU",
     *     description="SKU",
     *     example="men-round-neck-t-shirt"
     * )
     *
     * @var string
     */
    private $sku;

    /**
     * @OA\Property(
     *     title="Type",
     *     description="Product's type",
     *     example="simple"
     * )
     *
     * @var string
     */
    private $type;

    /**
     * @OA\Property(
     *     title="Name",
     *     description="Product name of ordered item",
     *     example="Men Round Neck T-Shirt"
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @OA\Property(
     *     title="Coupon Code",
     *     description="Cart coupon code",
     *     example="FLAT10%",
     * )
     *
     * @var string
     */
    private $coupon_code;

    /**
     * @OA\Property(
     *     title="Item's Weight",
     *     description="Product's weight of ordered item",
     *     type="string",
     *     example="10.20",
     * )
     *
     * @var string
     */
    private $weight;

    /**
     * @OA\Property(
     *     title="Ordered Quantity",
     *     description="Product ordered quantity",
     *     format="int64",
     *     example=6,
     * )
     *
     * @var int
     */
    private $qty_ordered;

    /**
     * @OA\Property(
     *     title="Shipped Quantity",
     *     description="Total shipped quantity of ordered product",
     *     format="int64",
     *     example=2,
     * )
     *
     * @var int
     */
    private $qty_shipped;

    /**
     * @OA\Property(
     *     title="Invoiced Quantity",
     *     description="Total invoiced quantity of ordered product",
     *     format="int64",
     *     example=4,
     * )
     *
     * @var int
     */
    private $qty_invoiced;

    /**
     * @OA\Property(
     *     title="Canceled Quantity",
     *     description="Total canceled quantity of ordered product",
     *     format="int64",
     *     example=2,
     * )
     *
     * @var int
     */
    private $qty_canceled;

    /**
     * @OA\Property(
     *     title="Refunded Quantity",
     *     description="Total refunded quantity of ordered product",
     *     format="int64",
     *     example=0,
     * )
     *
     * @var int
     */
    private $qty_refunded;

    /**
     * @OA\Property(
     *     title="Ordered Item Price",
     *     description="Price of ordered item",
     *     example="18.63",
     *     type="string"
     * )
     *
     * @var string
     */
    private $price;

    /**
     * @OA\Property(
     *      title="Formatted Price",
     *      description="Formatted Price of the Order Item",
     *      example="€18.63",
     *      type="string"
     * )
     *
     * @var string
     */
    private $formatted_price;

    /**
     * @OA\Property(
     *      title="Base Price",
     *      description="Base price of the Order Item",
     *      example="20.45",
     *      type="string"
     * )
     *
     * @var string
     */
    private $base_price;

    /**
     * @OA\Property(
     *      title="Formatted Base Price",
     *      description="Formatted Base price of the Order Item",
     *      example="$20.45",
     *      type="string"
     * )
     *
     * @var string
     */
    private $formatted_base_price;

    /**
     * @OA\Property(
     *     title="Ordered Item Total",
     *     description="Total of ordered item",
     *     example="37.26",
     *     type="string"
     * )
     *
     * @var string
     */
    private $total;

    /**
     * @OA\Property(
     *     title="Formatted Ordered Item Total",
     *     description="Formatted total of ordered item",
     *     example="€37.26",
     *     type="string"
     * )
     *
     * @var string
     */
    private $formatted_total;

    /**
     * @OA\Property(
     *      title="Base Total",
     *      description="Base total of the Order Item",
     *      example="42.95",
     *      type="string"
     * )
     *
     * @var string
     */
    private $base_total;

    /**
     * @OA\Property(
     *      title="Formatted Base Total",
     *      description="Formatted base total of the Order Item",
     *      example="$42.95"
     * )
     *
     * @var string
     */
    private $formatted_base_total;

    /**
     * @OA\Property(
     *     title="Total Invoiced of Ordered Item",
     *     description="Total invoiced amount of ordered item",
     *     example="20.45",
     *     type="string"
     * )
     *
     * @var string
     */
    private $total_invoiced;

    /**
     * @OA\Property(
     *     title="Total Base Invoiced of Ordered Item",
     *     description="Total base invoiced amount of ordered item",
     *     example="$20.45",
     *     type="string"
     * )
     *
     * @var string
     */
    private $base_total_invoiced;

    /**
     * @OA\Property(
     *     title="Total Refunded Amount of Ordered Item",
     *     description="Total refunded amount of ordered item",
     *     example="20.45",
     *     type="string"
     * )
     *
     * @var string
     */
    private $amount_refunded;

    /**
     * @OA\Property(
     *     title="Total Base Refunded Amount of Ordered Item",
     *     description="Total base refunded amount of ordered item",
     *     example="$20.45",
     *     type="string"
     * )
     *
     * @var string
     */
    private $base_amount_refunded;

    /**
     * @OA\Property(
     *     title="Tax Percentage Applied On Ordered Item",
     *     description="Tax percentage that applied on order item",
     *     example="10%",
     *     type="string"
     * )
     *
     * @var string
     */
    private $tax_percent;

    /**
     * @OA\Property(
     *     title="Tax Amount of Ordered Item",
     *     description="Tax amount of ordered item",
     *     example="2.045",
     *     type="string"
     * )
     *
     * @var string
     */
    private $tax_amount;

    /**
     * @OA\Property(
     *     title="Base Tax Amount Of Ordered Item",
     *     description="Base tax amount of ordered item",
     *     example="$2.045",
     *     type="string"
     * )
     *
     * @var string
     */
    private $base_tax_amount;

    /**
     * @OA\Property(
     *     title="Product ID",
     *     description="Product ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    private $product_id;

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
    public $product_base_image;
}
