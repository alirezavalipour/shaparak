<?php

namespace Shaparak\Http\Controller\Service;

use Illuminate\Support\Facades\Request;
use Shaparak\Database\models\Merchant;
use Shaparak\Database\models\Response;
use Shaparak\Facades\ShaparakFacade;
use Shaparak\Http\Controller\Controller;
use Shaparak\Service\Requests\ReadRequest\ReadRequest;
use Shaparak\Service\Requests\ReadRequest\TerminalRead;
use Shaparak\Service\Requests\WriteRequest\ShopProviderRegister;

class ShopProviderRegisterController extends Controller
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

    public function send(Request $request , $id)
    {

        $merchant = Merchant::find($id);

        $response = ShaparakFacade::make(ShopProviderRegister::class)->sendRequest($merchant, $merchant->shops);

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
