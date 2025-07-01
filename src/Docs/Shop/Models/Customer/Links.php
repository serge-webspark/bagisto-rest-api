<?php

namespace Webkul\RestApi\Docs\Shop\Models\Customer;

/**
 * @OA\Schema(
 *     title="Links",
 *     description="Pagination Links",
 * )
 */
class Links
{
    /**
     * @OA\Property(
     *     title="First page URL",
     *     description="First page URL",
     *     type="string",
     *     example="https://example.com/api/v1/customer/addresses?page=1",
     *     format="uri"
     * )
     *
     * @var string
     */
    private $first;

    /**
     * @OA\Property(
     *     title="Last page URL",
     *     description="Last page URL",
     *     type="string",
     *     example="https://example.com/api/v1/customer/addresses?page=10",
     *     format="uri"
     * )
     *
     * @var string
     */
    private $last;

    /**
     * @OA\Property(
     *     title="Previous page URL",
     *     description="Previous page URL",
     *     type="string",
     *     example="https://example.com/api/v1/customer/addresses?page=2",
     *     format="uri",
     *     nullable=true
     * )
     *
     * @var string
     */
    private $prev;


    /**
     * @OA\Property(
     *     title="Next page URL",
     *     description="Next page URL",
     *     type="string",
     *     example="https://example.com/api/v1/customer/addresses?page=4",
     *     format="uri",
     *     nullable=true
     * )
     *
     * @var string
     */
    private $next;
}
