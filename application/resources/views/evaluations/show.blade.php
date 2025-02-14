@extends('layouts.app')

@section('title', 'Détails de l\'évaluation')


@section('content')
<div class="container">
    <h1 class="text-3xl font-bold mb-4">{{ $evaluation->titre }}</h1>
    <div class="mt-4">
    <a href="{{ route('evaluationEleves.below10ByEval', $evaluation->id) }}" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
        Voir tous les élèves en dessous de la moyenne
    </a>
    </div>
    <h2 class="text-2xl mb-2">Élèves associés</h2>
    @if($etudiants->isEmpty())
        <p>Aucun élève associé à cette évaluation.</p>
    @else
        <div class="grid grid-cols-1 gap-4">
            @foreach($etudiants as $etudiant)
                <div class="p-4 rounded-lg shadow-md {{ $etudiant['note'] >= 10 ? 'bg-green-100' : 'bg-red-100' }}">
                    <strong>{{ $etudiant['eleve']->nom }} {{ $etudiant['eleve']->prenom }}</strong>
                    <p>Note : {{ $etudiant['note'] }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
