<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
use Illuminate\Support\Facades\Gate;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role != 'professeur'){
            abort(403, 'Vous n\'êtes pas autorisé à voir cette page.');
        }

        $eleves = Eleve::all();
        return view('eleves.index', compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->role != 'professeur'){
            abort(403, 'Vous n\'êtes pas autorisé à voir cette page.');
        }

        return view('eleves.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(auth()->user()->role != 'professeur'){
            abort(403, 'Vous n\'êtes pas autorisé à voir cette page.');
        }

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_naissance' => 'required',
            'email' => 'required',
            'numero_etudiant' => 'required'
        ]);
        $eleve = new Eleve();
        $eleve->email = $request->input('email');
        $eleve->nom = $request->input('nom');
        $eleve->prenom = $request->input('prenom');
        $eleve->numero_etudiant = $request->input('numero_etudiant');
        $eleve->date_naissance = $request->input('date_naissance');
        $eleve->save();  // Sauvegarder dans la base de données

        return redirect()->back()->with('success', 'Élève créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if(auth()->user()->role != 'professeur'){
            if(Gate::denies('view', Eleve::findOrFail($id))){
                abort(403, 'Vous n\'êtes pas autorisé à voir cette page.');
            }
        }

        // Récupérer l'élève
        $eleve = Eleve::findOrFail($id);
        return view('eleves.show', compact('eleve'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)  
    {
        if(auth()->user()->role != 'professeur'){
            abort(403, 'Vous n\'êtes pas autorisé à voir cette page.');
        }

        $eleve = Eleve::findOrFail($id);
        return view('eleves.edit', compact('eleve'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(auth()->user()->role != 'professeur'){
            abort(403, 'Vous n\'êtes pas autorisé à voir cette page.');
        }

        // Valider les champs
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_naissance' => 'required',
            'email' => 'required',
            'numero_etudiant' => 'required'
        ]);
        $eleve = Eleve::findOrFail($id);
    
        // Mettre à jour les champs
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');
        $numero_etudiant = $request->input('numero_etudiant');
        $date_naissance = $request->input('date_naissance');
        
        $eleve->update([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'numero_etudiant' => $numero_etudiant,
            'date_naissance' => $date_naissance
        ]);
        $eleve->save();  // Sauvegarder dans la base de données
    
        return redirect()->route('eleves.index')->with('success', 'Élève mis à jour avec succès');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if(auth()->user()->role != 'professeur'){
            abort(403, 'Vous n\'êtes pas autorisé à voir cette page.');
        }

        // Rechercher l'élève par son ID et le supprimer
        $eleve = Eleve::findOrFail($id); // Trouve l'élève ou échoue avec une erreur 404
        $eleve->delete();  // Supprime l'élève

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Élève supprimé avec succès');
    }
}
