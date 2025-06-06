<?php

namespace Webkul\RestApi\Docs\Shop\Models\Customer;

/**
 * @OA\Schema(
 *     title="Pagination",
 *     description="Pagination model",
 * )
 */
class Pagination
{
    /**
     * @OA\Property(
     *     title="Current Page",
     *     description="Current Page",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    private $current_page;

    /**
     * @OA\Property(
     *     title="From",
     *     description="From",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    private $from;

    /**
     * @OA\Property(
     *     title="Last Page",
     *     description="Last Page",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    private $last_page;

    /**
     * @OA\Property(
     *     title="Per Page",
     *     description="Per Page",
     *     format="int64",
     *     example=10
     * )
     *
     * @var int
     */
    private $per_page;

    /**
     * @OA\Property(
     *     title="Links",
     *     description="Links",
     *     type="array",
     *     example={{
     *       "url": null,
     *       "label": "Previous",
     *       "active": false,
     *     }, {
     *       "url": "http://localhost/public/api/v1/examples?sort=id&order=desc&page=1",
     *       "label": "1",
     *       "active": true,
     *     }, {
     *       "url": null,
     *       "label": "Next",
     *       "active": false,
     *     }},
     *
     *     @OA\Items(
     *
     *          @OA\Property(
     *              property="url",
     *              type="string",
     *              example=null
     *          ),
     *          @OA\Property(
     *              property="label",
     *              type="string",
     *              example="Previous"
     *          ),
     *          @OA\Property(
     *              property="active",
     *              type="bool",
     *              example=false
     *          ),
     *     ),
     *
     *     @OA\Items(
     *
     *          @OA\Property(
     *              property="url",
     *              type="string",
     *              example="http://localhost/public/api/v1/examples?sort=id&order=desc&page=1"
     *          ),
     *          @OA\Property(
     *              property="label",
     *              type="string",
     *              example="1"
     *          ),
     *          @OA\Property(
     *              property="active",
     *              type="bool",
     *              example=true
     *          ),
     *     ),
     *
     *     @OA\Items(
     *
     *          @OA\Property(
     *              property="url",
     *              type="string",
     *              example=null
     *          ),
     *          @OA\Property(
     *              property="label",
     *              type="string",
     *              example="Next"
     *          ),
     *          @OA\Property(
     *              property="active",
     *              type="bool",
     *              example=false
     *          ),
     *     )
     * )
     */
    private $links;

    /**
     * @OA\Property(
     *     title="Path",
     *     description="Path",
     *     type="string",
     *     example="http://localhost/public/api/v1/examples"
     * )
     *
     * @var string
     */
    private $path;

    /**
     * @OA\Property(
     *     title="To",
     *     description="To",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    private $to;

    /**
     * @OA\Property(
     *     title="Total",
     *     description="Total",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    private $total;
}
