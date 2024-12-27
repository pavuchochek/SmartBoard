@extends('layouts.app')

@section('title', 'Modifier un eleve')
@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Edit Student</h2>
    <form action="{{ route('eleves.update', $eleve) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label for="nom" class="block text-gray-700">Name:</label>
            <input type="text" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="nom" name="nom" value="{{ $eleve->nom }}">
        </div>
        <div class="mb-4">
            <label for="prenom" class="block text-gray-700">Prenom:</label>
            <input type="text" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="prenom" name="prenom" value="{{ $eleve->prenom }}">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email:</label>
            <input type="email" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="email" name="email" value="{{ $eleve->email }}">
        </div>
        <div class="mb-4">
            <label for="numero_etudiant" class="block text-gray-700">Num etu:</label>
            <input type="text" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="numero_etudiant" name="numero_etudiant" value="{{ $eleve->numero_etudiant }}">
        </div>
        
        <div class="mb-4">
            <label for="date_naissance" class="block text-gray-700">Date Naissance:</label>
            <input type="date" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="date_naissance" name="date_naissance" value="{{ $eleve->date_naissance }}">
        </div>
        
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
    </form>
</div>
@endsection
