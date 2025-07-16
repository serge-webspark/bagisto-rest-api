<?php

namespace Webkul\RestApi\Http\Controllers\V1\Shop\Customer;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Webkul\RestApi\Http\Resources\V1\Shop\Sales\CustomerOrderResource;
use Webkul\Sales\Repositories\OrderRepository;
use Webkul\Checkout\Facades\Cart;
use Webkul\RestApi\Http\Resources\V1\Shop\Checkout\CartResource;

class OrderController extends CustomerController
{
    protected $requestException = [
        'page', 'limit', 'pagination', 'sort', 'order', 'token', 'created_date_from', 'created_date_to',
    ];

    /**
     * Repository class name.
     */
    public function repository(): string
    {
        return OrderRepository::class;
    }

    /**
     * Resource class name.
     */
    public function resource(): string
    {
        return CustomerOrderResource::class;
    }

    protected function allResourceQuery(Model|Builder $builder, Request $request): Builder
    {
        return parent::allResourceQuery($builder, $request)
            ->when($request->get('created_date_from'), function (Builder|Model $query, string $date): void {
                $query->whereDate('created_at', '>=', $date);
            })
            ->when($request->get('created_date_to'), function (Builder|Model $query, string $date): void {
                $query->whereDate('created_at', '<=', $date);
            });
    }

    public function getRepositoryInstance()
    {
        return app($this->repository())->with([
            'items.product',
            'items.product.images',
        ]);
    }

    /**
     * Cancel customer's order.
     */
    public function cancel(Request $request, int $id): \Illuminate\Http\Response
    {
        $order = $this->resolveShopUser($request)->orders()->find($id);

        if ($order && $this->getRepositoryInstance()->cancel($order)) {
            return response([
                'message' => trans('rest-api::app.shop.sales.orders.cancel'),
            ]);
        }

        return response([
            'message' => trans('rest-api::app.shop.sales.orders.error.cancel-error'),
        ]);
    }

    /**
     * Reorder the specified resource.
     */
    public function reorder(Request $request, int $id): \Illuminate\Http\Response
    {
        $order = $this->resolveShopUser($request)->orders()->findOrFail($id);

        if (
            ! $order->canReorder() 
            || ! core()->getConfigData('sales.order_settings.reorder.shop')
        ) {
            return response([
                'message' => trans('rest-api::app.shop.sales.orders.error.reorder-error'),
            ], 405);
        }

        foreach ($order->items as $item) {
            try {
                $cart = Cart::addProduct($item->product, $item->additional);
            } catch (\Exception $e) {
                return response([
                    'message' => trans('rest-api::app.shop.sales.orders.error.reorder-error'),
                ], 405);
            }
        }

        return response([
            'data' => new CartResource($cart),
        ]);
    }
}
