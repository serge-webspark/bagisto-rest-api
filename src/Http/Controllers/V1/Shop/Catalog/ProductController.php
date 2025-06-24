<?php

namespace Webkul\RestApi\Http\Controllers\V1\Shop\Catalog;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Webkul\Product\Helpers\ConfigurableOption;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\RestApi\Http\Resources\V1\Shop\Catalog\ProductResource;
use Webkul\RestApi\Http\Resources\V1\Shop\Catalog\ProductReviewResource;

class ProductController extends CatalogController
{
        /**
     * Create a controller instance.
     *
     * @return void
     */
    public function __construct(protected ProductRepository $productRepository) {}

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
        return ProductRepository::class;
    }

    /**
     * Resource class name.
     */
    public function resource(): string
    {
        return ProductResource::class;
    }

    /**
     * Returns a listing of the resource.
     */
    public function allResources(Request $request)
    {
        if (core()->getConfigData('catalog.products.search.engine') == 'elastic') {
            $searchEngine = core()->getConfigData('catalog.products.search.storefront_mode');
        }

        $products = $this->getRepositoryInstance()
            ->setSearchEngine($searchEngine ?? 'database')
            ->getAll(array_merge(request()->query(), [
                'channel_id'           => core()->getCurrentChannel()->id,
                'status'               => 1,
                'visible_individually' => 1,
            ]));

        return $this->getResourceCollection($products);
    }

    /**
     * Returns product's additional information.
     */
    public function additionalInformation(Request $request, int $id): Response
    {
        $resource = $this->getRepositoryInstance()->findOrFail($id);

        $additionalInformation = app(\Webkul\Product\Helpers\View::class)
            ->getAdditionalData($resource);

        return response([
            'data' => $additionalInformation,
        ]);
    }

    /**
     * Returns product's additional information.
     */
    public function configurableConfig(Request $request, int $id): JsonResponse
    {
        $resource = $this->getRepositoryInstance()->findOrFail($id);

        $data = app(ConfigurableOption::class)->getConfigurationConfig($resource);

        $index = [];

        foreach ($data['index'] as $key => $attributeOptionsIds) {
            if (! isset($index[$key])) {
                $index[$key] = [
                    'id'                 => $key,
                    'attribute_option_ids' => [],
                ];
            }

            foreach ($attributeOptionsIds as $attributeId => $optionId) {
                if ($optionId) {
                    $optionData = [
                        'attribute_id'       => $attributeId,
                        'attribute_code'     => '',
                        'attribute_option_id' => $optionId,
                    ];

                    foreach ($data['attributes'] as $attribute) {
                        if ($attribute['id'] == $attributeId) {
                            $optionData['attribute_code'] = $attribute['code'];
                            break;
                        }
                    }

                    $index[$key]['attribute_option_ids'][] = $optionData;
                }
            }
        }

        $data['index'] = array_values($index);

        $variantPrices = [];

        foreach ($data['variant_prices'] as $key => $prices) {
            $variantPrices[$key] = [
                'id'            => $key,
                'regular'       => $prices['regular'],
                'final'         => $prices['final'],
            ];
        }

        $data['variant_prices'] = array_values($variantPrices);

        $variantImages = [];

        foreach ($data['variant_images'] as $key => $imgs) {
            $variantImages[$key] = [
                'id'     => $key,
                'images' => [],
            ];

            foreach ($imgs as $img_index => $urls) {
                $variantImages[$key]['images'][$img_index] = $urls;
            }
        }

        $data['variant_images'] = array_values($variantImages);

        $variantVideos = [];

        foreach ($data['variant_videos'] as $key => $videos) {
            $variantVideos[$key] = [
                'id'     => $key,
                'videos' => [],
            ];

            foreach ($videos as $videoIndex => $urls) {
                $variantVideos[$key]['videos'][$videoIndex] = $urls;
            }
        }

        $data['variant_videos'] = array_values($variantVideos);

        return response()->json([
            'data' => $data,
        ]);
    }

    /**
     * Get the reviews of a product.
     */
    public function reviews(int $id): \Illuminate\Http\Response
    {
        $resource = $this->getRepositoryInstance()->findOrFail($id);

        $reviews = $resource->reviews()
            ->where('status', 'approved')
            ->paginate(request()->input('limit') ?? 10);

        return response([
            'data' => ProductReviewResource::collection($reviews),
        ]);
    }
}
