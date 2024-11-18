@extends('layouts.app')

@section('title', 'Liste des Evaluations')
@section('content')
<div class="max-w-2xl mx-auto py-10">
    <form action="{{ route('evaluations.update', $evaluation->id) }}" method="POST" class="max-w-lg mx-auto">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
            <input type="date" name="date" id="date" value="{{ $evaluation->date }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div class="mb-4">
            <label for="titre" class="block text-sm font-medium text-gray-700">Titre</label>
            <input type="text" name="titre" id="titre" value="{{ $evaluation->titre }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div class="mb-4">
            <label for="coefficient" class="block text-sm font-medium text-gray-700">Coefficient</label>
            <input type="number" name="coefficient" id="coefficient" value="{{ $evaluation->coefficient }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div class="mb-4">
            <label for="module_id" class="block text-sm font-medium text-gray-700">Module</label>
            <select name="module_id" id="module_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @foreach($modules as $module)
                    <option value="{{ $module->id }}" {{ $module->id == $evaluation->module_id ? 'selected' : '' }}>{{ $module->code }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-end">
            <a href="{{ route('evaluations.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 mr-2">
                Retour
            </a>
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Mettre à jour
            </button>
        </div>
    </form>
</div>
@endsection