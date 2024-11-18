@extends('layouts.app')

@section('title', 'Infos eleve')
@section('content')

    <h1>Information de l'élève</h1>
    <p>Nom: {{ $eleve->nom }}</p>
    <p>Prénom: {{ $eleve->prenom }}</p>
    <p>Mail: {{ $eleve->email }}</p>
    <p>Num etu: {{ $eleve->numero_etudiant }}</p>

@endsection
