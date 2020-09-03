<?php

namespace Shaparak\Service\Requests\ReadRequest;

use Illuminate\Support\Facades\Request;
use Shaparak\Database\models\Response;
use Shaparak\Facades\ShaparakFacade;
use Shaparak\Service\Requests\RequestBase;

class ReadRequest extends RequestBase
{

    public function __construct()
    {
        $this->readRequest();

        parent::__construct();
    }

    public function callRequest(Response $response)
    {
        $data = [
            "trackingNumbers" => [$response->tracking_number],
        ];

        return $this->makeRequest()->setData($data)->send();
    }
}
