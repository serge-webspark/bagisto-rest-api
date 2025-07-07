<?php

declare(strict_types=1);

namespace Webkul\RestApi\Http\Resources\V1\Shop\Catalog;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Webkul\Product\Contracts\ProductReview;
use Webkul\Product\Facades\ProductImage;

/**
 * @mixin ProductReview
 */
final class ReviewedProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'sku' => $this->sku,
            'type' => $this->type,
            'name' => $this->name,
            'url_key' => $this->url_key,
            'base_image' => ProductImage::getProductBaseImage($this),
        ];
    }
}
