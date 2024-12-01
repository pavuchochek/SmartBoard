@extends('layouts.app')

@section('title', 'Liste des Evaluations')
@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-1/3">
        <form action="{{ route('evaluationsEleve.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="evaluation" class="block text-gray-700 text-sm font-bold mb-2">Choisir l'évaluation:</label>
                <select id="evaluation" name="evaluation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Sélectionner une évaluation</option>
                    <!-- Add options dynamically from the database -->
                </select>
            </div>
            <div class="mb-4">
                <label for="eleve" class="block text-gray-700 text-sm font-bold mb-2">Choisir l'élève:</label>
                <select id="eleve" name="eleve" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Sélectionner un élève</option>
                    <!-- Add options dynamically from the database -->
                </select>
            </div>
            <div class="mb-4">
                <label for="note" class="block text-gray-700 text-sm font-bold mb-2">Note:</label>
                <input type="number" id="note" name="note" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" min="0" max="20">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>

@endsection