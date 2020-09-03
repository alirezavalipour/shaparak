<?php

namespace Shaparak\Http\Controller\Client;

use Illuminate\Http\Request;
use Shaparak\Database\models\Acceptor;

class AcceptorsController extends \Shaparak\Http\Controller\Controller
{

    public function index()
    {
        $acceptors = Acceptor::paginate();

        return view('shaparak::admin.acceptor.index', compact('acceptors'));
    }

    public function create()
    {
        return view('shaparak::admin.acceptor.create');
    }

    public function store(Request $request)
    {

        $acceptor = Acceptor::create($request->all());

        return redirect()->route('shaparak.acceptor.store', ['id' => $acceptor->id]);
    }

    public function find($id)
    {
        $acceptor = Acceptor::findOrFail($id);
        $terminals = $acceptor->terminals;

        return view('shaparak::admin.acceptor.show', compact('acceptor', 'terminals'));
    }

    public function update(Request $request, $id)
    {
        $acceptor = Acceptor::find($id);

        $acceptor->update($request->all());

        return redirect()->route('shaparak.acceptor.find', ['id' => $acceptor->id]);
    }

}
