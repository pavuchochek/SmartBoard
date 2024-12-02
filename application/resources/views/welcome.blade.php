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
        
            <form action="{{ route('send.message.mail') }}" method="POST">
                <label for="message">Message</label>
                {{ csrf_field() }}
                <p>
                    <textarea name="message" id="message" rows="4" placeholder="Message à envoyer ici"></textarea>
                    {{ $errors->first('message', ":message") }}
                </p>
                <button type="submit">Envoyer</button>
            </form>

        @endcan
    @can('access-student-pages')
    <p>Bienvenue en tant qu'etudiant</p>
    @endcan
    </div>
@endsection