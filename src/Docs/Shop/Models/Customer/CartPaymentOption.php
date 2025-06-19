<?php

namespace Webkul\RestApi\Docs\Shop\Models\Customer;

/**
 * @OA\Schema(
 *     title="Cart's Payment Option",
 *     description="Cart's payment option model",
 * )
 */
class CartPaymentOption
{
    /**
     * @OA\Property(
     *     title="Payment Method Code",
     *     description="Payment method code",
     *     example="cashondelivery",
     * )
     *
     * @var string
     */
    private $method;

    /**
     * @OA\Property(
     *     title="Payment Method Title",
     *     description="Payment Method title",
     *     example="Cash On Delivery",
     * )
     *
     * @var string
     */
    private $method_title;


    /**
     * @OA\Property(
     *     title="Payment Method Description",
     *     description="Payment Method description",
     *     example="Cash On Delivery",
     *     type="string"
     * )
     *
     * @var string
     */
    private $description;

    /**
     * @OA\Property(
     *     title="Payment Method Sort Order",
     *     description="Payment Method sort order",
     *     example=1,
     *     type="integer"
     * )
     *
     * @var int
     */
    private $sort;

    /**
     * @OA\Property(
     *     title="Payment Method Image URL",
     *     description="Payment Method Image URL",
     *     example="https://example.com/image.jpg",
     *     type="string"
     * )
     *
     * @var string
     */
    private $image;
}
