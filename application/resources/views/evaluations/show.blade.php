@extends('layouts.app')

@section('title', 'Creer un module')
@section('content')


<div class="container">
    <h2>Liste des étudiants</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $evaluationEleve->note ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="mt-3">
    <a href="{{ route('notes.create') }}" class="btn btn-primary">Ajouter une note</a>
</div>
@endsection

