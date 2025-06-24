<?php

declare(strict_types=1);

namespace Webkul\RestApi\Http\Controllers\V1\Shop\Catalog;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;
use Webkul\Attribute\Repositories\AttributeRepository;
use Webkul\Category\Contracts\Category;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Product\Helpers\Toolbar;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\RestApi\Dto\CatalogFilterOptions;
use Webkul\RestApi\Http\Resources\V1\Shop\Catalog\CategoryFilterOptionsResource;

class CatalogFilterController extends CatalogController
{
    public function __construct(
        protected CategoryRepository $categoryRepository,
        protected ProductRepository $productRepository,
        protected AttributeRepository $attributeRepository,
        protected Toolbar $productHelperToolbar,
    ) {
        parent::__construct();
    }

    public function isAuthorized(): bool
    {
        return false;
    }

    public function index(Request $request): JsonResource
    {
        $request->validate([
            'categories' => ['required', 'array', 'min:1'],
            'categories.*' => ['required', 'integer', 'gte:1'],
        ]);

        $categoryId = Arr::first($request->array('categories'));

        /** @var Category $category */
        $category = $this->categoryRepository->findOrFail($categoryId);
        $filterableAttributes = $category->filterableAttributes;

        if ($filterableAttributes->isEmpty()) {
            $filterableAttributes = $this->attributeRepository->getFilterableAttributes();
        }

        $maxPrice = $this->productRepository->getMaxPrice(['category_id' => $categoryId]);

        return new CategoryFilterOptionsResource(
            new CatalogFilterOptions(
                minPrice: 0,
                maxPrice: $maxPrice,
                attributes: $filterableAttributes,
                sortingOptions: $this->productHelperToolbar->getAvailableOrders(),
            )
        );
    }
}
