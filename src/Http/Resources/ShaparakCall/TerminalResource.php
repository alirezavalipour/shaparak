<?php

namespace Shaparak\Http\Resources\ShaparakCall;

use Illuminate\Http\Resources\Json\JsonResource;

class TerminalResource extends JsonResource
{

    public function toArray($request)
    {

       return [

            "sequence"        => $this->sequence,
            "terminalNumber"  => $this->terminalNumber,
            "terminalType"    => $this->terminalType,
            "serialNumber"    => $this->serialNumber,
            "setupDate"       => $this->setupDate ? $this->setupDate->timestamp * 1000 : null,
            "hardwareBrand"   => $this->hardwareBrand,
            "hardwareModel"   => $this->hardwareModel,
            "accessAddress"   => $this->accessAddress,
            "accessPort"      => $this->accessPort,
            "callbackAddress" => $this->callbackAddress,
            "callbackPort"    => $this->callbackPort,
        ];

    }

}
