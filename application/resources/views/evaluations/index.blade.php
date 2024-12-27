@extends('layouts.app')

@section('title', 'Evaluations')
@section('content')
<h1 class="text-2xl font-bold mb-4 text-center">Liste des Evaluations</h1>
<div class="flex justify-between items-center mb-4">

<form method="GET" action="{{ route('evaluations.index') }}" class="mb-4 inline-block ml-5">
    <label for="module" class="block text-sm font-medium text-gray-700">Sélectionnez un module:</label>
    <select name="module_id" id="module" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" onchange="this.form.submit()">
        @foreach($modules as $module)
        <option value="{{ $module->id }}" {{ request('module_id') == $module->id ? 'selected' : '' }}>
            {{ $module->code }}
        </option>
        @endforeach
    </select>
</form>
<div class="m-4 p-4">
    <a href="{{ route('evaluations.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Créer une nouvelle évaluation
    </a>
    <a href="{{ route('evaluationEleves.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Ajouter une note
    </a>
</div>
</div>


<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @if($evaluations->isEmpty())
    <p class="text-center">Aucune évaluation trouvée. :c</p>
    @endif
    @foreach($evaluations as $evaluation)
    <!-- Card -->
    <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between">
        <!-- Content -->
        <div>
            <h1 class="text-gray-700 font-bold mb-2 text-xl">{{ $evaluation->titre }}</h1>
            <p class="text-gray-700 font-medium mb-2"><strong>Date :</strong> {{ $evaluation->date }}</p>

            <p class="text-gray-700 font-medium mb-2"><strong>Coefficient :</strong> {{ $evaluation->coefficient }}</p>
            <p class="text-gray-700 font-medium mb-2"><strong>Module :</strong> {{ $evaluation->module_id }}</p>
        </div>

        <!-- Actions -->
        <div class="mt-4 flex justify-between space-x-2">
            <!-- Edit Button -->
            <a href="{{ route('evaluations.edit', $evaluation->id) }}"
                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded transition duration-200">
                Modifier
            </a>
            <!-- Delete Form -->
            <form action="{{ route('evaluations.destroy', $evaluation->id) }}" method="POST"
                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette évaluation ?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition duration-200">
                    Supprimer
                </button>
            <!-- Show Button -->
            <a href="{{ route('evaluations.show', $evaluation->id) }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition duration-200">
                Voir Notes
            </a>
            </form>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection