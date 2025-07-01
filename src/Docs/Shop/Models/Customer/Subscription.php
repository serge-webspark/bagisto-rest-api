<?php

namespace Webkul\RestApi\Docs\Shop\Models\Customer;

/**
 * @OA\Schema(
 *     title="Subscription",
 *     description="Subscription model",
 * )
 */
class Subscription
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
     *     title="Email",
     *     description="email",
     *     example="john@example.com",
     *     type="string"
     * )
     *
     * @var string
     */
    private $email;

    /**
     * @OA\Property(
     *     title="Channel ID",
     *     description="Channel ID",
     *     type="integer",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    private $channel_id;

    /**
     * @OA\Property(
     *     title="Is Subscribed",
     *     description="Is Subscribed",
     *     type="integer",
     *     example=1
     * )
     *
     * @var int
     */
    private $is_subscribed;

    /**
     * @OA\Property(
     *     title="Customer ID",
     *     description="Customer ID",
     *     type="integer",
     *     format="int64",
     *     example=12
     * )
     *
     * @var int
     */
    private $customer_id;

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
    private $created_at;

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
    private $updated_at;
}
