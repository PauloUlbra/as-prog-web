<?php

namespace App\Http\Controllers;

use App\Models\Expedition;
use Illuminate\Http\Request;

class ExpeditionController extends Controller
{
    public function index()
    {
        $expeditions = Expedition::all();
        return view('expeditions.index', compact('expeditions'));
    }

    public function create()
    {
        return view('expeditions.create');
    }

    public function store(Request $request)
    {
        Expedition::create($request->all());
        return redirect('expeditions')->with('success', 'Expedition created successfully.');
    }

    public function edit($id)
    {
        $expedition = Expedition::findOrFail($id);
        return view('expeditions.edit', compact('expedition'));
    }

    public function update(Request $request, $id)
    {
        $expedition = Expedition::findOrFail($id);
        $expedition->update($request->all());
        return redirect('expeditions')->with('success', 'Expedition updated successfully.');
    }

    public function destroy($id)
    {
        $expedition = Expedition::findOrFail($id);
        $expedition->delete();
        return redirect('expeditions')->with('success', 'Expedition deleted successfully.');
    }
}
