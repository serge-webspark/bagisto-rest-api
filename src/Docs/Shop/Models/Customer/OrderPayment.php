<?php

namespace Webkul\RestApi\Docs\Shop\Models\Customer;

/**
 * @OA\Schema(
 *     title="OrderPayment",
 *     description="Order payment model",
 * )
 */
class OrderPayment
{
    /**
     * @OA\Property(
     *     title="Method",
     *     description="Method code",
     *     type="string",
     *     example="cashondelivery"
     * )
     *
     * @var string
     */
    public $method;

    /**
     * @OA\Property(
     *     title="Title",
     *     description="Method title",
     *     type="string",
     *     example="Cash On Delivery"
     * )
     *
     * @var string
     */
    public $method_title;
}
