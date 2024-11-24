@extends('layouts.app')

@section('title', 'Creer un module')
@section('content')

<div class="container mx-auto p-4 flex justify-center">
    <div class="w-full max-w-lg">
        <h2 class="text-2xl font-bold mb-4 text-center">Create Module</h2>
        <form action="{{ route('modules.store') }}" method="POST" class="space-y-4">
            @csrf
            <div class="form-group">
                <label for="code" class="block text-sm font-medium text-gray-700">Code:</label>
                <input type="text" class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="code" name="code" required>
            </div>
            <div class="form-group">
                <label for="nom" class="block text-sm font-medium text-gray-700">Nom:</label>
                <input type="text" class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="coefficient" class="block text-sm font-medium text-gray-700">Coefficient:</label>
                <input type="number" class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="coefficient" name="coefficient" required>
            </div>
            <div class="flex justify-between">
                <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Creer</button>
                <a href="{{ route('modules.index') }}" class="btn btn-secondary bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Retour</a>
            </div>
        </form>
    </div>
</div>

@endsection