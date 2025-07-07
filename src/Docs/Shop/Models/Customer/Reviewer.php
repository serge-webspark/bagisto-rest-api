<?php

namespace Webkul\RestApi\Docs\Shop\Models\Customer;

/**
 * @OA\Schema(
 *     title="Reviewer",
 *     description="Reviewer model",
 * )
 */
class Reviewer
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
     *     title="Full Name",
     *     description="Customer's Full Name",
     *     example="John Doe",
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @OA\Property(
     *     title="First Name",
     *     description="Customer's First Name",
     *     example="John",
     * )
     *
     * @var string
     */
    private $first_name;

    /**
     * @OA\Property(
     *     title="Last Name",
     *     description="Customer's Last Name",
     *     example="Doe",
     * )
     *
     * @var string
     */
    private $last_name;

    /**
     * @OA\Property(
     *     title="Image",
     *     description="Customer's Image",
     *     example="http://localhost/private/storage/customer/image.jpg"
     * )
     *
     * @var string
     */
    private $image;
}
