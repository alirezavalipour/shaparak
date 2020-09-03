<?php

namespace Shaparak\Http\Controller\Client;

use Illuminate\Http\Request;
use Shaparak\Database\models\Merchant;
use Shaparak\Database\models\Contract;

class MerchantsController extends \Shaparak\Http\Controller\Controller
{

    public function index()
    {
        $merchants = Merchant::paginate();

        return view('shaparak::admin.merchant.index', compact('merchants'));
    }

    public function create()
    {
        return view('shaparak::admin.merchant.create');
    }

    public function store(Request $request)
    {

        $merchant = Merchant::create($request->all());

        return redirect()->route('shaparak.merchant.store', ['id' => $merchant->id]);
    }

    public function find($id)
    {
        $merchant = Merchant::findOrFail($id);
        $contract = $merchant->contract;
        $shops = $merchant->shops;
        return view('shaparak::admin.merchant.show', compact('merchant', 'contract', 'shops'));
    }

    public function update(Request $request, $id)
    {
        $merchant = Merchant::find($id);
        $contract = Contract::createOrUpdate([
            'merchant_id' => $merchant->id
        ],$request->all());

        $merchant->update($request->all());

        return redirect()->route('shaparak.merchant.find', ['id' => $merchant->id]);
    }

}
