
@extends('layouts.app')

@section('title', 'Liste des Evaluations')
@section('content')
<div class="max-w-lg mx-auto">
<form class="space-y-6" method="POST" action="{{ route('eleves.store') }}">
  @csrf  <!-- Token de sécurité pour Laravel -->
  
  <div class="mb-4">
    <label for="inputEmail4" class="block text-sm font-medium text-gray-700">Email</label>
    <input type="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="inputEmail4" name="email">
  </div>
  <div class="mb-4">
    <label for="inputNom" class="block text-sm font-medium text-gray-700">Nom</label>
    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="inputNom" name="nom">
  </div>
  <div class="mb-4">
    <label for="inputPrenom" class="block text-sm font-medium text-gray-700">Prenom</label>
    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="inputPrenom" name="prenom">
  </div>
  <div class="mb-4">
    <label for="inputDateN" class="block text-sm font-medium text-gray-700">Date de naissance</label>
    <input type="date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="inputDateN" name="date_naissance">
  </div>
  <div class="mb-4">
    <label for="inputNumEtu" class="block text-sm font-medium text-gray-700">Numero Etudiant</label>
    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="inputNumEtu" name="numero_etudiant">
  </div>
  <div class="mb-4">
    <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Creer</button>
  </div>
  <div class="mb-4"></div>
    <a href="{{ route('eleves.index') }}" class="w-full bg-gray-600 text-white py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 text-center block">Retour</a>
  </div>
</form>
</div>
@endsection