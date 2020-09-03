<?php

namespace Shaparak\Database\seeders;

use Illuminate\Database\Seeder;
use Shaparak\Database\models\Terminal;

class TerminalTableSeeder extends Seeder
{

    public function run()
    {


        $terminals = [
            [
                "sequence"        => null,
                "terminalNumber"  => "Term0001",
                "serialNumber"    => null,
                "setupDate"       => 1595761245000,
                "terminalType"    => 1,
                "hardwareBrand"   => null,
                "hardwareModel"   => null,
                "accessAddress"   => "shp.com",
                "accessPort"      => "443",
                "callbackAddress" => "shp.com",
                "callbackPort"    => "443",
                "description"     => "sample",
            ],
        ];

        Terminal::create($terminals);

    }

}
