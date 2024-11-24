<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\evaluationEleve;
class EvaluationEleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //recuperer id eleve
        $eleve_id = $request->input('eleve_id');
        //recuperer id evaluation qui est en get
        $evaluation_id = $request->input('evaluation_id');
        //recuperer note
        $note = $request->input('note');
        //store
        $evaluationEleve = new evaluationEleve();
        $evaluationEleve->eleve_id = $eleve_id;
        $evaluationEleve->evaluation_id = $evaluation_id;
        $evaluationEleve->note = $note;
        $evaluationEleve->save();
        return redirect()->route('evaluations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
