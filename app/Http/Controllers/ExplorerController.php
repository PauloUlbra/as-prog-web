<?php

namespace App\Http\Controllers;

use App\Models\Explorer;
use Illuminate\Http\Request;

class ExplorerController extends Controller
{
    public function index()
    {
        $explorers = Explorer::all();
        return view('explorers.index', compact('explorers'));
    }

    public function create()
    {
        return view('explorers.create');
    }

    public function store(Request $request)
    {
        Explorer::create($request->all());
        return redirect('explorers')->with('success', 'Explorer created successfully.');
    }

    public function edit($id)
    {
        $explorer = Explorer::findOrFail($id);
        return view('explorers.edit', compact('explorer'));
    }

    public function update(Request $request, $id)
    {
        $explorer = Explorer::findOrFail($id);
        $explorer->update($request->all());
        return redirect('explorers')->with('success', 'Explorer updated successfully.');
    }

    public function destroy($id)
    {
        $explorer = Explorer::findOrFail($id);
        $explorer->delete();
        return redirect('explorers')->with('success', 'Explorer deleted successfully.');
    }
}
