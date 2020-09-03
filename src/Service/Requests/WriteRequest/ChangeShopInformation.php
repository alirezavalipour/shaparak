<?php

namespace Shaparak\Service\Requests\WriteRequest;

use Shaparak\Http\Resources\ShaparakCall\AcceptorResource;
use Shaparak\Http\Resources\ShaparakCall\ContractResource;
use Shaparak\Http\Resources\ShaparakCall\MerchantResource;
use Shaparak\Http\Resources\ShaparakCall\ShopResource;
use Shaparak\Service\Requests\Contracts\makeRequestContract;
use Shaparak\Service\Requests\RequestBase;

class ChangeShopInformation extends RequestBase implements makeRequestContract
{

    public function __construct()
    {
        $this->requestTypeCode = 17;
        parent::__construct();
    }

    public function callRequest($merchant, $shops, $contracts = null)
    {
        $this->setMerchantId($merchant->id);

        $data = [
            [
                "trackingNumberPsp" => "PF00139707040000A001",
                "requestType"       => $this->requestTypeCode,
                "merchant"          => MerchantResource::make($merchant),
                "relatedMerchants"  => null,
                "contract"          => ContractResource::make($contracts),
                "description"       => null,
            ],
        ];

        foreach ($shops as $shop) {
            $acceptors = [];

            foreach ($shop->acceptors as $acceptor) {
                $acceptors[] = AcceptorResource::make($acceptor)
                    ->shouldContainAcceptors(true)
                    ->shouldHaveUpdatingField(false)
                    ->shouldContainShaparakSettlementIbans(false)
                    ->shouldContainTerminal(false);
            }
            $data[0]['pspRequestShopAcceptors'][] = [
                "shop"      => ShopResource::make($shop),
                "acceptors" => count($acceptors) ? $acceptors : null,
            ];
        }

        return $this->writeRequest()->makeRequest()->setData($data)->send();
    }
}
