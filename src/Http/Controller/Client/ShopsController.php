<?php

namespace Shaparak\Http\Controller\Client;

use Illuminate\Http\Request;
use Shaparak\Database\models\Shop;

class ShopsController extends \Shaparak\Http\Controller\Controller
{

    public function index()
    {
        $shops = Shop::paginate();

        return view('shaparak::admin.shop.index', compact('shops'));
    }

    public function create()
    {
        return view('shaparak::admin.shop.create');
    }

    public function store(Request $request)
    {

        $shop = Shop::create($request->all());

        return redirect()->route('shaparak.shop.store', ['id' => $shop->id]);
    }

    public function find($id)
    {
        $shop = Shop::findOrFail($id);
        $acceptors = $shop->acceptors;

        return view('shaparak::admin.shop.show', compact('shop', 'acceptors'));
    }

    public function update(Request $request, $id)
    {
        $shop = Shop::find($id);

        $shop->update($request->all());

        return redirect()->route('shaparak.shop.find', ['id' => $shop->id]);
    }
}
