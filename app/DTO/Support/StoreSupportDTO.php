<?php

namespace App\DTO\Support;

use App\Http\Requests\StoreUpdateSupportRequest;

class StoreSupportDTO{
    public function __construct(public string $subject,public string $body, public string $status){}

    public static function makeFromRequest(StoreUpdateSupportRequest $request):self
    {
        return new self(
            $request->subject,
            $request->body,
            'active'
        );
    }

}