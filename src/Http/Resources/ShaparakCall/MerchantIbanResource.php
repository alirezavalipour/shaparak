<?php

namespace Shaparak\Http\Resources\ShaparakCall;

use Illuminate\Http\Resources\Json\JsonResource;

class MerchantIbanResource extends JsonResource
{



    public function toArray($request)
    {
        return [
            "description"  => $this->description,
            "merchantIban" => $this->merchantIban,
        ];

    }

}
