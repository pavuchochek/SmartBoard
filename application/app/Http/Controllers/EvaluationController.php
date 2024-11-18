<?php

namespace App\Http\Controllers;

use App\Http\Resources\evaluation;
use App\Models\module;
use App\Models\evaluations;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluations = evaluations::all();
        $modules=module::all();
        return view('evaluations.index', compact('evaluations','modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modules=module::all();
        return view('evaluations.create',data:compact('modules'));
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
        return view('evaluations.show', compact('evaluation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $evaluation = evaluations::find($id);
        $modules=module::all();
        return view('evaluations.edit', compact('evaluation','modules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string  $id)	
    {
        $evaluation=evaluations::find($id);
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
