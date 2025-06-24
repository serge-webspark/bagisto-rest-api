<?php

namespace Webkul\RestApi\Http\Controllers\V1\Shop\Catalog;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\RestApi\Http\Resources\V1\Shop\Catalog\CategoryResource;
use Webkul\RestApi\Http\Resources\V1\Shop\Catalog\CategoryTreeResource;

class CategoryController extends CatalogController
{
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
}
