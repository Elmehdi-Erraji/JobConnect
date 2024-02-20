<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Http\Requests\CreateEntrepriseRequest;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = Entreprise::all();

        return view('entreprises.index', compact('entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entreprises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CreateEntrepriseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEntrepriseRequest $request)
    {
        Entreprise::create($request->validated());

        return redirect()->route('entreprises.index')
            ->with('success', 'Entreprise created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        return view('entreprises.show', compact('entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        return view('entreprises.edit', compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CreateEntrepriseRequest  $request
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(CreateEntrepriseRequest $request, Entreprise $entreprise)
    {
        $entreprise->update($request->validated());

        return redirect()->route('entreprises.index')
            ->with('success', 'Entreprise updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        $entreprise->delete();

        return redirect()->route('entreprises.index')
            ->with('success', 'Entreprise deleted successfully.');
    }
}
