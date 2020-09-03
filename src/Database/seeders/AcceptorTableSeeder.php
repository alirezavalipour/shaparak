<?php

namespace Shaparak\Database\seeders;

use Illuminate\Database\Seeder;
use Shaparak\Database\models\Acceptor;

class AcceptorTableSeeder extends Seeder
{

    public function run()
    {
        $acceptor = [
            "iin"                            => "581672061",
            "acceptorCode"                   => "SHP_PF_970704A1",
            //                "facilitatorAcceptorCode"        => null ,
            "facilitatorAcceptorCode"        => "151374731188551",
            "acceptorType"                   => 2,
            "cancelable"                     => "false",
            "refundable"                     => "false",
            "blockable"                      => "false",
            "chargeBackable"                 => "false",
            "settledSeparately"              => "false",
            "allowScatteredSettlement"       => 0,
            "acceptCreditCardTransaction"    => "false",
            "allowIranianProductsTrx"        => "false",
            "allowKaraCardTrx"               => "false",
            "allowGoodsBasketTrx"            => "false",
            "allowFoodSecurityTrx"           => "false",
            "allowJcbCardTrx"                => "false",
            "allowUpiCardTrx"                => "false",
            "allowVisaCardTrx"               => "false",
            "allowMasterCardTrx"             => "false",
            "allowAmericanExpressTrx"        => "false",
            "allowOtherInternationaCardsTrx" => "false",
            "description"                    => "aa",
            "shaparakSettlementIbans"        => serialize(["IR620600300170007500736001", "IR480570025580010829596101"]),
        ];

        Acceptor::create($acceptor);
    }

}
