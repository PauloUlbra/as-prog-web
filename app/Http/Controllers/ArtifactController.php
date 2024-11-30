<?php

namespace App\Http\Controllers;

use App\Models\Artifact;
use Illuminate\Http\Request;

class ArtifactController extends Controller
{
    public function index()
        {
            $artifacts = Artifact::all();
            return view('artifacts.index', compact('artifacts'));
        }

        public function create()
        {
            return view('artifacts.create');
        }

        public function store(Request $request)
        {
            Artifact::create($request->all());
            return redirect('artifacts')->with('success', 'Artifact created successfully.');
        }

        public function edit($id)
        {
            $artifact = Artifact::findOrFail($id);
            return view('artifacts.edit', compact('artifact'));
        }

        public function update(Request $request, $id)
        {
            $artifact = Artifact::findOrFail($id);
            $artifact->update($request->all());
            return redirect('artifacts')->with('success', 'Artifact updated successfully.');
        }

        public function destroy($id)
        {
            $artifact = Artifact::findOrFail($id);
            $artifact->delete();
            return redirect('artifacts')->with('success', 'Artifact deleted successfully.');
        }
}
