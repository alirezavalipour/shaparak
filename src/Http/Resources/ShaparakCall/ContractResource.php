<?php

namespace Shaparak\Http\Resources\ShaparakCall;

use Illuminate\Http\Resources\Json\JsonResource;

class ContractResource extends JsonResource
{

    protected $shouldContainUpdatingField = false;

    protected $updateAction = 0;

    function ShouldHaveUpdatingField($flag, $updateStatus = 0)
    {
        $this->shouldContainUpdatingField = $flag;
        $this->updateAction               = $updateStatus;

        return $this;
    }

    public function toArray($request)
    {
        return [
            "contractDate"     => $this->contractDate ? $this->contractDate->timestamp * 1000 : null,
            "expiryDate"       => $this->expiryDate ? $this->expiryDate->timestamp * 1000 : null,
            "serviceStartDate" => $this->serviceStartDate ? $this->serviceStartDate->timestamp * 1000 : null,
            "contractNumber"   => $this->contractNumber,
            "description"      => $this->description,
            $this->mergeWhen($this->shouldContainUpdatingField, ['updateAction' => $this->updateAction]),
        ];
    }

}
