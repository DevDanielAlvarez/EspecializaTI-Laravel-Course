<?php

namespace App\DTO\Support;

use App\Http\Requests\StoreUpdateSupportRequest;

class UpdateSupportDTO{

    public function __construct(public string $id,public string $subject, public string $body,public string  $status){}

    public static function makeFromRequest(StoreUpdateSupportRequest $request): self{
        return new self(
            $request->id,
            $request->subject,
            $request->body,
            $request->status
        );
    }

}