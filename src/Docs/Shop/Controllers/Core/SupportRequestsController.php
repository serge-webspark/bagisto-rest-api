<?php

namespace Webkul\RestApi\Docs\Shop\Controllers\Core;

use Webkul\RestApi\Http\Requests\SupportRequest;

class SupportRequestsController
{
    /**
     * @OA\Post(
     *      path="/api/v1/support/requests",
     *      operationId="supportRequests",
     *      tags={"Support"},
     *      summary="Submit a support request",
     *      description="Submit a support request",
     *
     *      @OA\RequestBody(
     *          @OA\MediaType(
     *              mediaType="multipart/form-data",
     *              @OA\Schema(
     *                  @OA\Property(
     *                      property="name",
     *                      type="string",
     *                      example="John Doe"
     *                  ),
     *                  @OA\Property(
     *                      property="email",
     *                      type="string",
     *                      format="email",
     *                      example="shop@example.com"
     *                  ),
     *                  @OA\Property(
     *                       property="phone",
     *                       type="string",
     *                       example="123-456-7890",
     *                       nullable=true
     *                  ),
     *                  @OA\Property(
     *                       property="message",
     *                       type="string",
     *                       example="Hello, I need help with my order.",
     *                  ),
     *                  required={"name", "email", "message"},
     *              )
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\JsonContent(
     *
     *              @OA\Property(
     * 					property="message",
     * 					type="string",
     * 					example="Thank you for contacting us. We will get back to you soon."
     *				)
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=422,
     *          description="Bad Request",
     *
     *          @OA\JsonContent(
     *
     *              @OA\Property(
     * 					property="message",
     * 					type="string",
     * 					example="Invalid input data."
     * 				)
     *          )
     *      )
     * )
     */
    public function store(SupportRequest $request) {}
}
