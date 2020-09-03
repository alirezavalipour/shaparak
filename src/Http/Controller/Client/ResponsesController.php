<?php

namespace Shaparak\Http\Controller\Client;

use Illuminate\Http\Request;
use Shaparak\Database\models\Response;

class ResponsesController extends \Shaparak\Http\Controller\Controller
{

    public function index()
    {
        $responses = Response::paginate();

        return view('shaparak::admin.response.index', compact('responses'));
    }

    public function create()
    {
        return view('shaparak::admin.response.create');
    }

    public function store(Request $request)
    {

        $response = Response::create($request->all());

        return redirect()->route('shaparak.response.store', ['id' => $response->id]);
    }

    public function find($id)
    {
        $response = Response::findOrFail($id);

        return view('shaparak::admin.response.show', compact('response'));
    }

    public function update(Request $request, $id)
    {
        $response = Response::find($id);

        $response->update($request->all());

        return redirect()->route('shaparak.response.find', ['id' => $response->id]);
    }
}
