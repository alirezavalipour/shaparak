<?php

namespace Shaparak\Http\Resources\ShaparakCall;

use Illuminate\Http\Resources\Json\JsonResource;

class MerchantResource extends JsonResource
{

    protected $shouldContainMerchantIbans = true;
    protected $shouldContainUpdatingField = false;
    protected $updateAction               = 0;

    /**
     * @param $flag
     *
     * @description for deactivate terminal should be null
     */

    function shouldHaveMerchantIbans($flag)
    {
        $this->shouldContainMerchantIbans = $flag;

        return $this;
    }

    /**
     * @param $flag
     *
     * @description just
     */

    function ShouldHaveUpdatingField($flag, $updateStatus = 0)
    {
        $this->shouldContainUpdatingField = $flag;
        $this->updateAction               = $updateStatus;

        return $this;
    }

    public function toArray($request)
    {
        return [
            "firstNameFa"             => $this->firstNameFa,
            "lastNameFa"              => $this->lastNameFa,
            "fatherNameFa"            => $this->fatherNameFa,
            "firstNameEn"             => $this->firstNameEn,
            "lastNameEn"              => $this->lastNameEn,
            "fatherNameEn"            => $this->fatherNameEn,
            "gender"                  => $this->gender,
            "birthDate"               => $this->birthDate->timestamp * 1000,
            "registerDate"            => $this->registerDate ? $this->registerDate->timestamp * 1000 : $this->registerDate,
            "nationalCode"            => $this->nationalCode,
            "registerNumber"          => $this->registerNumber,
            "comNameFa"               => $this->comNameFa,
            "comNameEn"               => $this->comNameEn,
            "merchantType"            => $this->merchantType,
            "residencyType"           => $this->residencyType,
            "vitalStatus"             => $this->vitalStatus,
            "birthCrtfctSerial"       => $this->birthCrtfctSerial,
            "birthCrtfctSeriesLetter" => $this->birthCrtfctSeriesLetter,
            "birthCrtfctSeriesNumber" => $this->birthCrtfctSeriesNumber,
            "birthCrtfctNumber"       => $this->birthCrtfctNumber,
            "nationalLegalCode"       => $this->nationalLegalCode,
            "commercialCode"          => $this->commercialCode,
            "countryCode"             => $this->countryCode,
            "foreignPervasiveCode"    => $this->foreignPervasiveCode,
            "passportNumber"          => $this->passportNumber,
            "passportExpireDate"      => $this->passportExpireDate,
            "description"             => $this->description,
            "telephoneNumber"         => $this->telephoneNumber,
            "cellPhoneNumber"         => $this->cellPhoneNumber,
            "emailAddress"            => $this->emailAddress,
            "webSite"                 => $this->webSite,
            "fax"                     => $this->fax,
            "merchantIbans"           => $this->shouldContainMerchantIbans ? MerchantIbanResource::collection($this->merchantIbans) : null,
            $this->mergeWhen($this->shouldContainUpdatingField, ['updateAction' => $this->updateAction]),
        ];

    }

}
