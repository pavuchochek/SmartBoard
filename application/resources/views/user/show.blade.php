@extends('layouts.app')

@section('title', 'Liste des Evaluations')
@section('content')

<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">Profil de l'utilisateur</h2>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">Email:</label>
        <p class="text-gray-900">{{ $user->email }}</p>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">Nom:</label>
        <p class="text-gray-900">{{ $data->nom }}</p>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">Prénom:</label>
        <p class="text-gray-900">{{ $data->prenom }}</p>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">Rôle:</label>
        <p class="text-gray-900">{{ $user->role }}</p>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">Date de naissance:</label>
        <p class="text-gray-900">{{ $data->date_naissance }}</p>
    </div>
</div>
@endsection