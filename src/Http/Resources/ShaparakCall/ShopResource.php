<?php

namespace Shaparak\Http\Resources\ShaparakCall;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource
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
            "farsiName"                   => $this->farsiName,
            "englishName"                 => $this->englishName,
            "telephoneNumber"             => $this->telephoneNumber,
            "postalCode"                  => $this->postalCode,
            "businessCertificateNumber"   => $this->businessCertificateNumber,
            "certificateExpiryDate"       => $this->certificateExpiryDate ? $this->certificateExpiryDate->timestamp * 1000 : null,
            "description"                 => $this->description,
            "businessCategoryCode"        => $this->businessCategoryCode,
            "businessSubCategoryCode"     => $this->businessSubCategoryCode,
            "certificateIssueDate"        => $this->certificateIssueDate ? $this->certificateIssueDate->timestamp * 1000 : null,
            "rentalExpiryDate"            => $this->rentalExpiryDate ? $this->rentalExpiryDate->timestamp * 1000 : null,
            "rentalContractNumber"        => $this->rentalContractNumber,
            "address"                     => $this->address,
            "countryCode"                 => $this->countryCode,
            "provinceCode"                => $this->provinceCode,
            "cityCode"                    => $this->cityCode,
            "ownershipType"               => $this->ownershipType,
            "businessType"                => $this->businessType,
            "etrustCertificateType"       => $this->etrustCertificateType,
            "etrustCertificateIssueDate"  => $this->etrustCertificateIssueDate ? $this->etrustCertificateIssueDate->timestamp * 1000 : null,
            "etrustCertificateExpiryDate" => $this->etrustCertificateExpiryDate ? $this->etrustCertificateExpiryDate->timestamp * 1000 : null,
            "emailAddress"                => $this->emailAddress,
            "websiteAddress"              => $this->websiteAddress,

            $this->mergeWhen($this->shouldContainUpdatingField, [
                'updateAction' => $this->updateAction,
            ]),
        ] ;
    }

}
