@extends('layouts.app')

@section('title', 'Infos élève')
@section('content')

    <div class="container mx-auto p-4">

        <h1 class="text-3xl font-bold mb-4">Information de l'élève</h1>
        <div class="bg-white shadow-md rounded p-6 mb-4">
            <p class="text-xl"><strong>Nom:</strong> {{ $eleve->nom }}</p>
            <p class="text-xl"><strong>Prénom:</strong> {{ $eleve->prenom }}</p>
            <p class="text-xl"><strong>Mail:</strong> {{ $eleve->email }}</p>
            <p class="text-xl"><strong>Numéro étudiant:</strong> {{ $eleve->numero_etudiant }}</p>
        </div>
        <div class="mt-6 p-4 bg-blue-100 text-blue-800 rounded">
            <h3 class="text-2xl font-bold">Moyenne des notes:</h3>
            <p class="text-4xl">{{ $eleve->moyenne() }}</p>
        </div>
        <h2 class="text-2xl font-semibold mb-2">Notes aux évaluations</h2>
        <ul class="bg-white shadow-md rounded p-6">
            @php
                $modules = [];
                foreach ($eleve->evaluations as $evaluation) {
                    $modules[$evaluation->evaluation->module->code][] = $evaluation;
                }
            @endphp
            @foreach($modules as $moduleCode => $evaluations)
                <li class="mb-4">
                    <h3 class="text-xl font-bold">{{ $moduleCode }}</h3>
                    <ul class="ml-4">
                        @foreach($evaluations as $evaluation)
                            <li class="mb-2">
                                <div class="p-4 rounded shadow {{ $evaluation->note < 10 ? 'bg-red-100' : 'bg-green-100' }}">
                                    <p><strong>Nom:</strong> {{ $evaluation->evaluation->titre }}</p>
                                    <p><strong>Date:</strong> {{ $evaluation->evaluation->date }}</p>
                                    <p><strong>Note:</strong> {{ $evaluation->note }}</p>
                                </di>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
