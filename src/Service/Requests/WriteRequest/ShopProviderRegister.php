<?php

namespace Shaparak\Service\Requests\WriteRequest;

use Shaparak\Http\Resources\ShaparakCall\AcceptorResource;
use Shaparak\Http\Resources\ShaparakCall\MerchantResource;
use Shaparak\Http\Resources\ShaparakCall\ShopResource;
use Shaparak\Service\Requests\Contracts\makeRequestContract;
use Shaparak\Service\Requests\RequestBase;

class ShopProviderRegister extends RequestBase implements makeRequestContract
{
    public function __construct()
    {
        $this->requestTypeCode = 13;
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
                "contract"          => $contracts,
                "description"       => null,
            ],
        ];

        foreach ($shops as $shop) {

            $acceptors = [];

            foreach (AcceptorResource::collection($shop->acceptors) as $acceptor) {
                if ($acceptor = $acceptor->toArray(request())) {
                    $acceptors[] = $acceptor;
                }

            }

            $data[0]['pspRequestShopAcceptors'][] = [
                "shop"      => ShopResource::make($shop),
                "acceptors" => count($acceptors) ? $acceptors : null,
            ];

        }


        //        dd(json_decode(json_encode($data)));

        return $this->writeRequest()->makeRequest()->setData($data)->send();
    }
}
