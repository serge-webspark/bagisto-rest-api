<?php

namespace Webkul\RestApi\Http\Controllers\V1\Shop;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Webkul\RestApi\Contracts\ResourceContract;
use Webkul\RestApi\Http\Controllers\V1\V1Controller;
use Webkul\RestApi\Traits\ProvideResource;
use Webkul\RestApi\Traits\ProvideUser;

class ResourceController extends V1Controller implements ResourceContract
{
    use ProvideResource, ProvideUser;

    /**
     * Resource name.
     *
     * @var string
     */
    protected $resourceName = 'Resource(s)';

    /**
     * These are ignored during request.
     *
     * @var array
     */
    protected $requestException = ['page', 'limit', 'pagination', 'sort', 'order', 'token'];

    /**
     * Returns a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allResources(Request $request)
    {
        $query = $this->getRepositoryInstance()
            ->scopeQuery(fn (Builder $query): Builder => $this->allResourceQuery($query, $request));

        if (is_null($request->input('pagination')) || $request->input('pagination')) {
            $results = $query->paginate($request->input('limit') ?? 10);
        } else {
            $results = $query->get();
        }

        return $this->getResourceCollection($results);
    }

    protected function allResourceQuery(Builder $builder, Request $request): Builder
    {
        return $builder
            ->when($this->isAuthorized(), function (Builder $query) use ($request): void {
                $query->where('customer_id', $this->resolveShopUser($request)->id);
            })
            ->when(
                $request->input('sort'),
                function (Builder $query) use ($request): void {
                    $query->orderBy($request->input('sort'), $request->input('order') ?? 'desc');
                },
                function (Builder $query): void {
                    $query->orderBy('id', 'desc');
                }
            )
            ->when($request->except($this->requestException), function (Builder $query, array $filters) use ($request): void {
                foreach ($filters as $input => $value) {
                    $query->whereIn($input, array_map('trim', explode(',', $value)));
                }
            });
    }

    /**
     * Returns an individual resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getResource(Request $request, $id)
    {
        $resourceClassName = $this->resource();

        $resource = $this->isAuthorized()
            ? $this->getRepositoryInstance()->where('customer_id', $this->resolveShopUser($request)->id)->findOrFail($id)
            : $this->getRepositoryInstance()->findOrFail($id);

        return new $resourceClassName($resource);
    }
}
