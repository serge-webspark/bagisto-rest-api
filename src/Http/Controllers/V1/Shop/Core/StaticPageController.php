<?php

declare(strict_types=1);

namespace Webkul\RestApi\Http\Controllers\V1\Shop\Core;

use Webkul\CMS\Repositories\PageRepository;
use Webkul\RestApi\Http\Resources\V1\Shop\Core\StaticPageDetailsResource;
use Webkul\RestApi\Http\Resources\V1\Shop\Core\StaticPageListResource;

final class StaticPageController extends CoreController
{
    public function isAuthorized(): bool
    {
        return false;
    }

    public function repository(): string
    {
        return PageRepository::class;
    }

    public function resource(): string
    {
        return StaticPageDetailsResource::class;
    }

    public function getResourceCollection($results)
    {
        return StaticPageListResource::collection($results);
    }
}
