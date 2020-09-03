<?php

namespace Shaparak\Database\seeders;

use Illuminate\Database\Seeder;
use Shaparak\Database\models\Shop;

class ShopTableSeeder extends Seeder
{

    public function run()
    {

        $shop = [
            "farsiName"                   => " فروشگاه پرداخت یار",
            "englishName"                 => "PF_Shop",
            "telephoneNumber"             => "021-75105000",
            "postalCode"                  => "1513747311",
            "businessCertificateNumber"   => "123",
            "certificateExpiryDate"       => 1568108800000,
            "description"                 => "aa",
            "businessCategoryCode"        => "4814",
            "businessSubCategoryCode"     => "0",
            "certificateIssueDate"        => 1537920000000,
            "rentalExpiryDate"            => 1591590400000,
            "rentalContractNumber"        => "",
            "address"                     => "میرداماد",
            "countryCode"                 => "IR",
            "provinceCode"                => "THR",
            "cityCode"                    => "108012",
            "ownershipType"               => 1,
            "businessType"                => 1,
            "etrustCertificateType"       => 0,
            "etrustCertificateIssueDate"  => null,
            "etrustCertificateExpiryDate" => null,
            "emailAddress"                => "sample@homearan.ir",
            "websiteAddress"              => "homearan.ir",
        ];

        Shop::create($shop);
    }

}
