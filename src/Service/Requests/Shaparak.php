<?php

namespace Shaparak\Service\Requests;

use Carbon\Carbon;
use Exception;
use Shaparak\Database\models\Merchant;
use Shaparak\Database\models\Response;
use Shaparak\Service\Requests\WriteRequest\ShopProviderRegister;
use Shaparak\Service\Requests\WriteRequest\TerminalRegister;

class Shaparak
{
    public $request;

    public function make($requestType)
    {

        $this->request = $requestType;

        return $this;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function readRequest(Response $response)
    {
        $request = resolve($this->request);

        $response = $request->callRequest($response);

        $responses = json_decode($response, true);

        if (!$responses) {
            throw new Exception("shaparak error:" . $response);
        }

        $shaparakResponse = [];

        foreach ($responses as $response) {
            $responseModel = Response::where('tracking_number', $response["trackingNumber"])->first();

            $responseModel->update([
                    'request_date'              => Carbon::createFromTimestamp($response['requestDate'] / 1000),
                    'request_rejection_reasons' => serialize($response["requestRejectionReasons"]),
                    'status'                    => $response['status'],
                ]);

            $shaparakResponse[] = $responseModel;

        }

        return $shaparakResponse;

    }

    public function sendRequest($merchant, $shops, $contracts = null)
    {

        $requestClass = resolve($this->request);

        $response = $requestClass->callRequest($merchant, $shops, $contracts);

        $responses = json_decode($response, true);

        if (!$responses) {
            throw new Exception("shaparak error:" . $response);
        }

        foreach ($responses as $response) {

            $response = Response::create([
                'data'                      => serialize(json_decode(json_encode($requestClass->getData()))),
                'request_type'              => $requestClass->getRequestTypeCode(),
                'merchant_id'              => $requestClass->getMerchantId(),
                'tracking_number_psp'       => $response["trackingNumberPsp"],
                'tracking_number'           => $response["trackingNumber"],
                'request_rejection_reasons' => serialize($response["requestRejectionReasons"]),
            ]);
        }

        return $response;

    }

}
