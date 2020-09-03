<?php

namespace Shaparak\Http\Controller\Service;

use Shaparak\Database\models\Response;

use Shaparak\Http\Resources\ShaparakCall\AcceptorResource;
use Shaparak\Http\Resources\ShaparakCall\ContractResource;
use Shaparak\Http\Resources\ShaparakCall\MerchantResource;

use Illuminate\Support\Facades\Request;
use Shaparak\Database\models\Merchant;
use Shaparak\Facades\ShaparakFacade;

use Shaparak\Http\Resources\ShaparakCall\ShopResource;
use Shaparak\Service\Requests\ReadRequest\ReadRequest;
use Shaparak\Service\Requests\ReadRequest\TerminalRead;
use Shaparak\Service\Requests\WriteRequest\ShopProviderRegister;
use Shaparak\Service\Requests\WriteRequest\TerminalRegister;

class TerminalRegisterController extends \Shaparak\Http\Controller\Controller
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

    public function send(Request $request, $id)
    {
        $merchant = Merchant::find($id);

        $response = ShaparakFacade::make(TerminalRegister::class)->sendRequest($merchant, $merchant->shops, $merchant->contract);

        dd($response);
        //        return redirect()->back();
    }

    public function view()
    {
        return view('shaparak::admin.services.shop_provider_register');
    }

    public function find($id)
    {

    }

}
