@extends('layouts.base')
@section('content')

@section('content')
<div class="max-w-lg mx-auto w-full pt-20 pl-32">
    <form class="bg-white shadow-md rounded px-12 pt-6 pb-8 mb-4" action="{{ url('artifacts/'.$artifact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Name" id="name" name="name" value="{{ $artifact->name }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="discovery_time">
                Time in hours
            </label>
            <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" placeholder="Discovery" id="discovery_time" name="discovery_time" value="{{ $artifact->discovery_time }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="code">
                Code
            </label>
            <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Code" id="code" name="code" value="{{ $artifact->code }}" required>
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Update Artifact
            </button>
        </div>

    </form>
    <p class="text-center text-gray-500 text-xs">
        &copy;2024 Paulo Roberto. All rights reserved.
    </p>
</div>
@endsection