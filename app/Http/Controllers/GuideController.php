<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function index()
    {
        $guides = Guide::all();
        return view('guides.index', compact('guides'));
    }

    public function create()
    {
        return view('guides.create');
    }

    public function store(Request $request)
    {
        Guide::create($request->all());
        return redirect('guides')->with('success', 'Guide created successfully.');
    }

    public function edit($id)
    {
        $guide = Guide::findOrFail($id);
        return view('guides.edit', compact('guide'));
    }

    public function update(Request $request, $id)
    {
        $guide = Guide::findOrFail($id);
        $guide->update($request->all());
        return redirect('guides')->with('success', 'Guide updated successfully.');
    }

    public function destroy($id)
    {
        $guide = Guide::findOrFail($id);
        $guide->delete();
        return redirect('guides')->with('success', 'Guide deleted successfully.');
    }
}
