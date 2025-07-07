<?php

declare(strict_types=1);

namespace Webkul\RestApi\Docs\Shop\Models\Customer;

/**
 * @OA\Schema(
 *     title="CustomerReview",
 *     description="CustomerReview model",
 * )
 */
class CustomerReview
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
     *     title="Title",
     *     description="Review title",
     *     example="Good Product & Fast Service"
     * )
     *
     * @var string
     */
    private $title;

    /**
     * @OA\Property(
     *     title="Rating",
     *     description="Review rating",
     *     type="string",
     *     example="5.0"
     * )
     *
     * @var string
     */
    private $rating;

    /**
     * @OA\Property(
     *     title="Comment",
     *     description="Review comment",
     *     example="Lorem Ipsum is simply dummy text of the printing and typesetting industry."
     * )
     *
     * @var string
     */
    private $comment;

    /**
     * @OA\Property(
     *     title="Name",
     *     description="Customer Name",
     *     example="Peter Doe"
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @OA\Property(
     *     title="Status",
     *     description="Review status",
     *     enum={"pending", "approved", "disapproved"}
     * )
     *
     * @var string
     */
    private $status;

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

    /**
     * @OA\Property(
     *     title="Product",
     *     description="Reviewed Product"
     * )
     *
     * @var \Webkul\RestApi\Docs\Shop\Models\Customer\ReviewedProduct
     */
    private $product;

    /**
     * @OA\Property(
     *     title="Customer",
     *     description="Review's Customer"
     * )
     *
     * @var \Webkul\RestApi\Docs\Shop\Models\Customer\Reviewer
     */
    private $customer;
}
