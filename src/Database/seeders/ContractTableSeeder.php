<?php

namespace Shaparak\Database\seeders;

use Illuminate\Database\Seeder;
use Shaparak\Database\models\Contract;

class ContractTableSeeder  extends Seeder
{
    public function run()
    {
        $contact = [
            "contractDate"     => 1595761245000,
            "expiryDate"       => 1695761245000,
            "serviceStartDate" => 1595761245000,
            "contractNumber"   => "123",
            "description"      => "aa",
            "updateAction"     => 0,
        ];

        Contract::create($contact);
    }
}
