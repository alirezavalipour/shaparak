<?php

namespace Shaparak\Service\Requests\Contracts;

interface makeRequestContract
{

    public function callRequest($merchant, $shops, $contracts = null);

}
