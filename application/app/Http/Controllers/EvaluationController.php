<?php

namespace App\Http\Controllers;

use App\Http\Resources\evaluation;
use App\Models\module;
use App\Models\evaluations;
use Illuminate\Http\Request;
use App\Models\Eleve;
use App\Models\evaluationEleve;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluations = evaluations::all();
        $modules = module::all();
        return view('evaluations.index', compact('evaluations', 'modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modules = module::all();
        return view('evaluations.create', data: compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'titre' => 'required',
            'coefficient' => 'required|integer',
            'module_id' => 'required|exists:modules,id',
        ]);

        evaluations::create($request->all());
        return redirect()->route('evaluations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evaluation = evaluations::find($id);
    
        // Récupérer les évaluations des élèves
        $evaluationEleves = $evaluation->evaluationEleves;
    
        if ($evaluationEleves->isEmpty()) {
            return view('evaluations.show', [
                'evaluation' => $evaluation,
                'etudiants' => [],
                'evaluationEleves' => []
            ])->with('error', 'Aucun élève associé à cette évaluation.');
        }
    
        // Récupérer les élèves associés avec leurs notes
        $etudiants = $evaluationEleves->map(function($evaluationEleve){
            return [
                'eleve' => $evaluationEleve->eleve, // L'élève associé
                'note' => $evaluationEleve->note   // La note de l'élève
            ];
        });
    
        return view('evaluations.show', compact('evaluation', 'etudiants', 'evaluationEleves'));
    }
    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $evaluation = evaluations::find($id);
        $evaluationEleves = $evaluation->evaluationEleve;
        $eleves = Eleve::all();
        return view('evaluations.edit', compact('evaluation', 'modules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string  $id)
    {
        $evaluation = evaluations::find($id);
        //mettre a jour les champs
        $evaluation->update($request->all());

        return redirect()->route('evaluations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(evaluations $evaluation)
    {
        $evaluation->delete();
        return redirect()->route('evaluations.index');
    }
}
