<?php

declare(strict_types=1);

namespace Webkul\RestApi\Docs\Shop\Controllers\Catalog;

use Webkul\RestApi\Http\Controllers\V1\Shop\Catalog\CatalogController;

class CatalogFilterController extends CatalogController
{
    /**
     * @OA\Get(
     *      path="/api/v1/catalog/filters",
     *      operationId="getCategoryFilters",
     *      tags={"Categories"},
     *      summary="Get catalog filters",
     *      description="Returns shop catalog filters",
     *
     *      @OA\RequestBody(
     *           @OA\MediaType(
     *               mediaType="application/json",
     *               @OA\Schema(
     *                   @OA\Property(
     *                       property="categories",
     *                       description="Street Address",
     *                       type="array",
     *                       example={4, 5},
     *                       @OA\Items(
     *                           type="integer"
     *                       )
     *                   ),
     *                   required={"categories"}
     *               )
     *           )
     *       ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\JsonContent(
     *
     *              @OA\Property(
     *                  property="data",
     *                  type="object",
     *                  ref="#/components/schemas/CatalogFilterOptions"
     *              )
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function index()
    {
    }
}
