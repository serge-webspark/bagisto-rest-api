<?php

namespace Webkul\RestApi\Http\Controllers\V1\Shop\Catalog;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Webkul\Attribute\Repositories\AttributeRepository;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Product\Helpers\Toolbar;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\RestApi\Http\Resources\V1\Shop\Catalog\CategoryResource;
use Webkul\RestApi\Http\Resources\V1\Shop\Catalog\CategoryTreeResource;

class CategoryController extends CatalogController
{
    public function __construct(
        protected ProductRepository $productRepository,
        protected AttributeRepository $attributeRepository,
        protected Toolbar $productHelperToolbar,
    ) {
        parent::__construct();
    }

    /**
     * Is resource authorized.
     */
    public function isAuthorized(): bool
    {
        return false;
    }

    /**
     * Repository class name.
     */
    public function repository(): string
    {
        return CategoryRepository::class;
    }

    /**
     * Resource class name.
     */
    public function resource(): string
    {
        return CategoryResource::class;
    }

    /**
     * Returns a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function descendantCategories(Request $request)
    {
        $results = $this->getRepositoryInstance()->getVisibleCategoryTree($request->input('parent_id'));

        return $this->getResourceCollection($results);
    }

    public function tree(): JsonResource
    {
        $categories = $this->getRepositoryInstance()->getVisibleCategoryTree(core()->getRequestedChannel()->root_category_id);

        return CategoryTreeResource::collection($categories);
    }

    public function getFilterAttributes(int $id): Response
    {
        $category = $this->getRepositoryInstance()->findOrFail($id);

        if (empty($filterableAttributes = $category?->filterableAttributes)) {
            $filterableAttributes = $this->attributeRepository->getFilterableAttributes();
        }

        $maxPrice = $this->productRepository->getMaxPrice(['category_id' => $category?->id]);

        return response([
            'id'                => $category?->id,
            'min_price'         => 0,
            'max_price'         => $maxPrice,
            'filter_attributes' => $filterableAttributes,
            'sort_orders'       => $this->productHelperToolbar->getAvailableOrders(),
        ]);
    }
}
