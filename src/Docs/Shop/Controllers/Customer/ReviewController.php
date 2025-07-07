<?php

namespace Webkul\RestApi\Docs\Shop\Controllers\Customer;

class ReviewController
{
    /**
     * @OA\Get(
     *      path="/api/v1/customer/reviews",
     *      operationId="getCustomerReviews",
     *      tags={"Reviews"},
     *      summary="Get customer's reviews",
     *      description="Returns customer's reviews",
     *      security={ {"sanctum": {} }},
     *
     *      @OA\Response(
     *           response=200,
     *           description="Successful operation",
     *           @OA\JsonContent(
     *               @OA\Property(
     *                   property="data",
     *                   type="array",
     *                   @OA\Items(ref="#/components/schemas/CustomerReview")
     *               ),
     *               @OA\Property(
     *                    property="links",
     *                    ref="#/components/schemas/Links"
     *               ),
     *               @OA\Property(
     *                   property="meta",
     *                   ref="#/components/schemas/Pagination"
     *               )
     *           )
     *       ),
     *
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      )
     * )
     */
    public function get()
    {
    }
}
