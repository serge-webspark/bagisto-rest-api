<?php

declare(strict_types=1);

namespace Webkul\RestApi\Http\Resources\V1\Shop\Sales;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Webkul\Sales\Contracts\OrderPayment;

/**
 * @mixin OrderPayment
 */
final class OrderPaymentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'method' => $this->method,
            'method_title' => $this->method_title,
        ];
    }
}
