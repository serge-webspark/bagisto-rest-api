<?php

namespace Webkul\RestApi\Docs\Shop\Models\Customer;

/**
 * @OA\Schema(
 *     title="GDPR",
 *     description="GDPR Data Request Model",
 * )
 */
class GDPR
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="Unique identifier of the GDPR request",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    private $id;

    /**
     * @OA\Property(
     *     title="Status",
     *     description="Current status of the GDPR request (e.g., pending, approved, rejected, revoked)",
     *     type="string",
     *     example="pending"
     * )
     *
     * @var string
     */
    private $status;

    /**
     * @OA\Property(
     *     title="Type",
     *     description="Type of GDPR request (e.g., data access, data deletion, data portability)",
     *     type="string",
     *     example="access"
     * )
     *
     * @var string
     */
    private $type;

    /**
     * @OA\Property(
     *     title="Message",
     *     description="Optional message or note from the customer",
     *     example="Please delete all my personal data."
     * )
     *
     * @var string
     */
    private $message;

    /**
     * @OA\Property(
     *     title="Customer ID",
     *     description="ID of the customer who created the request",
     *     format="int64",
     *     example=42
     * )
     *
     * @var int
     */
    private $customer_id;

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Datetime when the GDPR request was created",
     *     example="2025-04-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $created_at;

    /**
     * @OA\Property(
     *     title="Updated At",
     *     description="Datetime when the GDPR request was last updated",
     *     example="2025-04-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $updated_at;
}
