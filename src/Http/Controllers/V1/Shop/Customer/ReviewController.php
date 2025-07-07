<?php

declare(strict_types=1);

namespace Webkul\RestApi\Http\Controllers\V1\Shop\Customer;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Product\Repositories\ProductReviewRepository;
use Webkul\RestApi\Http\Resources\V1\Shop\Catalog\CustomerReviewResource;

final class ReviewController extends CustomerController
{
    public function __construct(
        protected ProductReviewRepository $wishlistRepository,
        protected ProductRepository $productRepository
    ) {
        parent::__construct();
    }

    public function index(Request $request): ResourceCollection
    {
        $customer = $this->resolveShopUser($request);

        return CustomerReviewResource::collection(
            $customer
                ->reviews()
                ->with([
                    'product' => [
                        'attribute_family',
                        'images',
                        'attribute_values',
                    ]
                ])
                ->paginate(2),
        );
    }
}
