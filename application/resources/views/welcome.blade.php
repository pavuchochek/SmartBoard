@extends('layouts.app')

@section('title', 'Liste des Evaluations')
@section('content')
    
    <div class="container mx-auto p-4">
        
    @can('access-professor-pages')
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="box eleves bg-blue-500 text-white p-4 rounded cursor-pointer" onclick="location.href='/eleves'">
                Les élèves
            </div>
            <div class="box modules bg-green-500 text-white p-4 rounded cursor-pointer" onclick="location.href='/modules'">
                Les modules
            </div>
            <div class="box evaluations bg-red-500 text-white p-4 rounded cursor-pointer" onclick="location.href='/evaluations'">
                Les évaluations
            </div>
            </div>

        @endcan
    @can('access-student-pages')
    <h1 class="text-3xl p-5">Bienvenue en tant qu'etudiant</h1>
    <a href="{{ route('eleves.show', Auth::user()->eleve?->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Voir mes notes
    </a>
    @endcan
    </div>
@endsection