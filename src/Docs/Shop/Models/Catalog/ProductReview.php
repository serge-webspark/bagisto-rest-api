<?php

namespace Webkul\RestApi\Docs\Shop\Models\Catalog;

/**
 * @OA\Schema(
 *     title="ProductReview",
 *     description="ProductReview model",
 * )
 */
class ProductReview
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
     *     title="Attachments",
     *     description="Review attachments",
     *     example="http://localhost/private/storage/review/{product_id}/{image_name.jpg}"
     * )
     *
     * @var string
     */
    private $attachments;

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
     *     title="Product",
     *     description="Reviewed Product"
     * )
     *
     * @var \Webkul\RestApi\Docs\Shop\Models\Catalog\Product
     */
    private $product;

    /**
     * @OA\Property(
     *     title="Customer ID",
     *     description="Customer ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    private $customer_id;

    /**
     * @OA\Property(
     *     title="Customer",
     *     description="Review's Customer"
     * )
     *
     * @var \Webkul\RestApi\Docs\Shop\Models\Customer\Customer
     */
    private $customer;
}
