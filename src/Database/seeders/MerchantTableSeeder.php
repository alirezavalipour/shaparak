<?php

namespace Shaparak\Database\seeders;

use Illuminate\Database\Seeder;
use Shaparak\Database\models\merchant;

class MerchantTableSeeder extends Seeder
{
    public function run()
    {

        $merchant = [
            "firstNameFa"             => "علیرضا",
            "lastNameFa"              => "ولی پور",
            "fatherNameFa"            => "سعید",
            "firstNameEn"             => "alireza",
            "lastNameEn"              => "valipour",
            "fatherNameEn"            => "saeid",
            "gender"                  => 1,
            "birthDate"               => 754432200000,
            "registerDate"            => null,
            "nationalCode"            => "0016378148",
            "registerNumber"          => null,
            "comNameFa"               => null,
            "comNameEn"               => null,
            "merchantType"            => 0,
            "residencyType"           => 0,
            "vitalStatus"             => 0,
            "birthCrtfctNumber"       => null,
            "birthCrtfctSerial"       => null,
            "birthCrtfctSeriesLetter" => null,
            "birthCrtfctSeriesNumber" => null,
            "nationalLegalCode"       => null,
            "commercialCode"          => "",
            "countryCode"             => null,
            "foreignPervasiveCode"    => null,
            "passportNumber"          => null,
            "passportExpireDate"      => null,
            "description"             => "aa",
            "telephoneNumber"         => "021-75105000",
            "cellPhoneNumber"         => "09120000000",
            "emailAddress"            => "info@shaparak.ir",
            "webSite"                 => "shaparak.ir",
            "fax"                     => "",
            "merchantIbans"           => serialize(
                [
                    [
                        "merchantIban" => "IR620600300170007500736001",
                        "description"  => "IBAN1",
                    ],
                    [
                        "merchantIban" => "IR480570025580010829596101",
                        "description"  => "IBAN2",
                    ],
                ]),
            "updateAction"            => null,
        ];

        merchant::create($merchant);

    }
}
