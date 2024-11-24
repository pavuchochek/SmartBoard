@extends('layouts.app')

@section('title', 'Élèves avec note inférieure à 10')

@section('content')
<div class="container">
    <h1 class="text-3xl font-bold mb-4">Élèves avec note inférieure à 10 pour l'évaluation "{{ $evaluation->titre }}"</h1>

    @if($eleves->isEmpty())
        <p>Il n'y a aucun élève avec une note inférieure à 10 pour cette évaluation.</p>
    @else
        <ul>
            @foreach($eleves as $eleve)
                <li>{{ $eleve->eleve->nom }} {{ $eleve->eleve->prenom }} - Note : {{ $eleve->note }}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
