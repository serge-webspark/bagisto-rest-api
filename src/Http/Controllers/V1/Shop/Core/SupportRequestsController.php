<?php

declare(strict_types=1);

namespace Webkul\RestApi\Http\Controllers\V1\Shop\Core;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Webkul\RestApi\Http\Controllers\V1\Shop\Customer\CustomerController;
use Webkul\RestApi\Http\Requests\SupportRequest;
use Webkul\Shop\Mail\ContactUs;

final class SupportRequestsController extends CustomerController
{
    public function store(SupportRequest $request): Response
    {
        Mail::queue(
            new ContactUs(
                $request
                    ->merge(['contact' => $request->get('phone')])
                    ->only(['name', 'email', 'contact', 'message'])
            )
        );

        return response([
            'message' => trans('rest-api::app.shop.support-requests.thanks-for-contact'),
        ]);
    }
}
