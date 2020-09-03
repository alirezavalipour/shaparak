<?php

namespace Shaparak\Http\Controller\Service;

use Shaparak\Database\models\Response;

use Shaparak\Http\Controller\Controller;
use Shaparak\Http\Resources\ShaparakCall\AcceptorResource;
use Shaparak\Http\Resources\ShaparakCall\ContractResource;
use Shaparak\Http\Resources\ShaparakCall\MerchantResource;
use Shaparak\Http\Resources\ShaparakCall\ShopResource;
use Illuminate\Support\Facades\Request;
use Shaparak\Database\models\Merchant;
use Shaparak\Facades\ShaparakFacade;
use Shaparak\Service\Requests\ReadRequest\ReadRequest;
use Shaparak\Service\Requests\ReadRequest\TerminalRead;
use Shaparak\Service\Requests\WriteRequest\ChangeSheba;
use Shaparak\Service\Requests\WriteRequest\ChangeShopInformation;
use Shaparak\Service\Requests\WriteRequest\DeactivateTerminal;
use Shaparak\Service\Requests\WriteRequest\ShopProviderRegister;

class DeativateTerminalController extends Controller
{

    public function index()
    {

    }


    public function read(Request $request, $id)
    {

        $response = Response::find($id);

        $response = ShaparakFacade::make(ReadRequest::class)->readRequest($response);

        dd($response);

    }

    public function send(Request $request, $id )
    {

        $merchant = Merchant::find($id);

        $response = ShaparakFacade::make(DeactivateTerminal::class)->sendRequest($merchant, $merchant->shops, $merchant->contract);

        dd($response);

    }

    public function view()
    {
        return view('shaparak::admin.services.shop_provider_register');
    }

    public function find($id)
    {

    }

}
