
@extends('layouts.app')

@section('title', 'Modifier un eleve')
@section('content')
<div class="container">
    <h2>Edit Student</h2>
    <form action="{{ route('eleves.update', $eleve) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nom">Name:</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $eleve->nom }}">
        </div>
        <div class="form-group">
            <label for="prenom">Prenom:</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $eleve->prenom }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $eleve->email }}">
        </div>
        <div class="form-group">
            <label for="numero_etudiant">Num etu:</label>
            <input type="text" class="form-control" id="numero_etudiant" name="numero_etudiant" value="{{ $eleve->numero_etudiant }}">
        </div>
        
        <div class="form-group">
            <label for="date_naissance">Date Naissance:</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="{{ $eleve->date_naissance }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection