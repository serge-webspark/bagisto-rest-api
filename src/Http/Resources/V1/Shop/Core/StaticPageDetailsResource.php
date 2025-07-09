<?php

declare(strict_types=1);

namespace Webkul\RestApi\Http\Resources\V1\Shop\Core;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class StaticPageDetailsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'   => $this->id,
            'url_key' => $this->url_key,
            'page_title' => $this->page_title,
            'html_content' => $this->html_content,
        ];
    }
}
