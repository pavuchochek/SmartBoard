
@extends('layouts.app')

@section('title', 'Eleves')
@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Liste des Élèves</h1>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-4">
            <a href="{{ route('eleves.create') }}">Ajouter un élève</a>
        </button>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($eleves as $eleve)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold">{{ $eleve->nom }} {{ $eleve->prenom }}</h2>
                    <p class="text-gray-600">Email: {{ $eleve->email }}</p>
                    <p class="text-gray-600">Numéro Étudiant: {{ $eleve->numero_etudiant }}</p>
                    <div class="mt-4">
                        <a href="{{ route('eleves.edit', $eleve->id) }}" class="text-blue-500 hover:underline">Modifier</a>
                        <form action="{{ route('eleves.destroy', $eleve->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline ml-2">Supprimer</button>
                        </form>
                    </div>
                <div class="mt-2">
                    <a href="{{ route('eleves.show', $eleve->id) }}" class="text-green-500 hover:underline">Voir les notes de l'élève</a>
                </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection