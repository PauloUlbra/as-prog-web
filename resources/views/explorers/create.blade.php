@extends('layouts.base')

@section('content')

    <div class="max-w-lg mx-auto w-full pt-20 pl-32">
    <form class="bg-white shadow-md rounded px-12 pt-6 pb-8 mb-4" action="{{ url('explorers') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Name" id="name" name="name" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="identification">
                Identification
            </label>
            <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Identification" id="identification" name="identification" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-    none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" placeholder="email" id="email" name="email" required>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Create Explorer
        </button>
        </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
        &copy;2024 Paulo Roberto. All rights reserved.
    </p>
    </div>
@endsection