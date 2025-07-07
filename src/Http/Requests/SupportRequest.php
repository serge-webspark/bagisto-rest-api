<?php

declare(strict_types=1);

namespace Webkul\RestApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Webkul\Core\Rules\PhoneNumber;

final class SupportRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'    => ['required', 'string', 'max:50'],
            'email'   => ['required', 'email'],
            'phone' => ['nullable', new PhoneNumber()],
            'message' => ['required', 'string', 'max:500'],
        ];
    }
}
