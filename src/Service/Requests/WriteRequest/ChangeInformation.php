<?php

namespace Shaparak\Service\Requests\WriteRequest;

use Shaparak\Http\Resources\ShaparakCall\AcceptorResource;
use Shaparak\Http\Resources\ShaparakCall\ContractResource;
use Shaparak\Http\Resources\ShaparakCall\MerchantResource;
use Shaparak\Http\Resources\ShaparakCall\ShopResource;
use Shaparak\Service\Requests\Contracts\makeRequestContract;
use Shaparak\Service\Requests\RequestBase;

class ChangeInformation extends RequestBase implements makeRequestContract
{
    public function __construct()
    {
        $this->requestTypeCode = 14;
        parent::__construct();
    }

    public function callRequest($merchant, $shops, $contracts = null)
    {
        $this->setMerchantId($merchant->id);

        $data = [
            [
                "trackingNumberPsp" => "PF00139707040000A001",
                "requestType"       => $this->requestTypeCode,
                "merchant"          => MerchantResource::make($merchant)
                    ->shouldHaveUpdatingField(true, static::UPDATE_WITHOUT_CHANGE)
                    ->shouldHaveMerchantIbans(false),
                "relatedMerchants"  => null,
                "contract"          => ContractResource::make($contracts)
                    ->shouldHaveUpdatingField(true, static::UPDATE_WITHOUT_CHANGE),
                "description"       => null,
            ],
        ];

        foreach ($shops as $shop) {
            $acceptors = [];

            foreach ($shop->acceptors as $acceptor) {
                $acceptors[] = AcceptorResource::make($acceptor)
                    ->shouldContainAcceptors(true)
                    ->shouldHaveUpdatingField(true, static::UPDATE_WITHOUT_CHANGE)
                    ->shouldContainShaparakSettlementIbans(false)
                    ->shouldContainTerminal(false);
            }

            $data[0]['pspRequestShopAcceptors'][] = [
                "shop"      => ShopResource::make($shop)->ShouldHaveUpdatingField(true, static::UPDATE_CHANGED),
                "acceptors" => count($acceptors) ? $acceptors : null,
            ];
        }

        return $this->writeRequest()->makeRequest()->setData($data)->send();
    }

}
