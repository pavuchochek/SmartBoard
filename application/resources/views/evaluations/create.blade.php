@extends('layouts.app')

@section('title', 'Créer une évaluation')
@section('content')
    <div class="container mx-auto mt-10">
        <h2 class="text-center text-2xl font-bold mb-6">Créer une Évaluation</h2>
        <form action="{{ route('evaluations.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
            <div class="mb-4">
                <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date</label>
                <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date" name="date" required>
            </div>
            <div class="mb-4">
                <label for="titre" class="block text-gray-700 text-sm font-bold mb-2">Titre</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titre" name="titre" required>
            </div>
            <div class="mb-4">
                <label for="coefficient" class="block text-gray-700 text-sm font-bold mb-2">Coefficient</label>
                <input type="number" step="0.01" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="coefficient" name="coefficient" required>
            </div>
            <div class="mb-4">
                <label for="module_id" class="block text-gray-700 text-sm font-bold mb-2">Module</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="module_id" name="module_id" required>
                    <option value="">Sélectionnez un module</option>
                    @foreach($modules as $module)
                        <option value="{{ $module->id }}">{{ $module->code }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Créer</button>
            </div>
        </form>
    </div>
@endsection