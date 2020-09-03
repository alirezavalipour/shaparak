<?php

namespace Shaparak\Http\Resources\ShaparakCall;

use Illuminate\Http\Resources\Json\JsonResource;

class AcceptorResource extends JsonResource
{

    protected $shouldContainAcceptors               = false;
    protected $shouldContainTerminal                = false;
    protected $shouldContainShaparakSettlementIbans = false;
    public    $shouldContainUpdatingField           = false;
    protected $updateAction                         = 0;

    function shouldContainAcceptors($flag)
    {
        $this->shouldContainAcceptors = $flag;

        return $this;
    }

    /**
     * @param $flag
     *
     * @description  for deactivate
     * change sheba
     * change shop
     * shopProviderRegister
     * should be null
     */

    function shouldContainTerminal($flag)
    {
        $this->shouldContainTerminal = $flag;

        return $this;
    }

    /**
     * @param $flag
     *
     * @description for deactivate terminal should be null
     */

    function shouldContainShaparakSettlementIbans($flag)
    {
        $this->shouldContainShaparakSettlementIbans = $flag;

        return $this;
    }

    /**
     * @param $flag
     *
     * @description just for updating
     */

    function shouldHaveUpdatingField($flag, $updateStatus = 0)
    {
        $this->shouldContainUpdatingField = $flag;
        $this->updateAction               = $updateStatus;
        return $this;
    }

    public function toArray($request)
    {


        if ($this->shouldContainAcceptors) {
            return [
                "iin"                            => $this->iin,
                "acceptorCode"                   => $this->acceptorCode,
                "facilitatorAcceptorCode"        => $this->facilitatorAcceptorCode,
                "acceptorType"                   => $this->acceptorType,
                "cancelable"                     => $this->cancelable,
                "refundable"                     => $this->refundable,
                "blockable"                      => $this->blockable,
                "chargeBackable"                 => $this->chargeBackable,
                "settledSeparately"              => $this->settledSeparately,
                "allowScatteredSettlement"       => $this->allowScatteredSettlement,
                "acceptCreditCardTransaction"    => $this->acceptCreditCardTransaction,
                "allowIranianProductsTrx"        => $this->allowIranianProductsTrx,
                "allowKaraCardTrx"               => $this->allowKaraCardTrx,
                "allowGoodsBasketTrx"            => $this->allowGoodsBasketTrx,
                "allowFoodSecurityTrx"           => $this->allowFoodSecurityTrx,
                "allowJcbCardTrx"                => $this->allowJcbCardTrx,
                "allowUpiCardTrx"                => $this->allowUpiCardTrx,
                "allowVisaCardTrx"               => $this->allowVisaCardTrx,
                "allowMasterCardTrx"             => $this->allowMasterCardTrx,
                "allowAmericanExpressTrx"        => $this->allowAmericanExpressTrx,
                "allowOtherInternationaCardsTrx" => $this->allowOtherInternationaCardsTrx,
                "description"                    => $this->description,
                "shaparakSettlementIbans"        => $this->shouldContainShaparakSettlementIbans ? $this->shaparakSettlementIbans : null,
                "terminals"                      => $this->shouldContainTerminal ? TerminalResource::collection($this->terminals) : null,
                $this->mergeWhen($this->shouldContainUpdatingField, [
                    'updateAction' => $this->updateAction,
                ]),
            ];
        } else {
            return [];
        }
        //        dump($this->shouldContainUpdatingField);
        //        dd($this->mergeWhen( $this->shouldContainUpdatingField , ['updateAction' => $this->updateAction]));


    }

}
