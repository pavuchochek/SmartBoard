@extends('layouts.app')

@section('title', 'Modules')
@section('content')
    <div class="container mx-auto mt-10">
        <h1 class="text-4xl font-bold text-center mb-10">Modules</h1>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-4">
            <a href="{{ route('modules.create') }}">Ajouter un module</a>
        </button>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($modules as $module)
                <div class="bg-white p-6 rounded-lg shadow-lg border-grey-300">
                    <h2 class="text-2xl font-bold mb-2">{{ $module->code }}</h2>
                    <p class="text-gray-700">{{ $module->nom }}</p>
                    <p class="text-gray-700">{{ $module->coefficient }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection