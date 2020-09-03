<?php

namespace Shaparak\Http\Controller\Client;

use Illuminate\Http\Request;
use Shaparak\Database\models\Terminal;

class TerminalsController extends \Shaparak\Http\Controller\Controller
{

    public function index()
    {
        $terminals = Terminal::paginate();

        return view('shaparak::admin.terminal.index', compact('terminals'));
    }

    public function create()
    {
        return view('shaparak::admin.terminal.create');
    }

    public function store(Request $request)
    {

        $terminal = Terminal::create($request->all());

        return redirect()->route('shaparak.terminal.store', ['id' => $terminal->id]);
    }

    public function find($id)
    {
        $terminal = Terminal::findOrFail($id);

        return view('shaparak::admin.terminal.show', compact('terminal'));
    }

    public function update(Request $request, $id)
    {
        $terminal = Terminal::find($id);

        $terminal->update($request->all());

        return redirect()->route('shaparak.terminal.find', ['id' => $terminal->id]);
    }
}
