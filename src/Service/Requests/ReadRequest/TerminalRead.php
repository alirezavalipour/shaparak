<?php

namespace Shaparak\Service\Requests\ReadRequest;

use Shaparak\Service\Requests\RequestBase;

class TerminalRead extends RequestBase
{
    public function __construct()
    {
        $this->readRequest();

        parent::__construct();
    }

    public function callRequest($data)
    {
        return $this->makeRequest()->setData($data)->send();
    }

}
