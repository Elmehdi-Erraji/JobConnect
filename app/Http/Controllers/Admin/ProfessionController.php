<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profession;
use App\Http\Requests\CreateProfessionRequest;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $professions = Profession::all();
    return view('admin.profession.index', compact('professions'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CreateProfessionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProfessionRequest $request)
    {
        Profession::create($request->validated());

        return redirect()->route('profession.index')
            ->with('success', 'Profession created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function show(Profession $profession)
    {
        return view('professions.show', compact('profession'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function edit(Profession $profession)
    {
        return view('professions.edit', compact('profession'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CreateProfessionRequest  $request
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function update(CreateProfessionRequest $request, Profession $profession)
    {
        $profession->update($request->validated());

        return redirect()->route('professions.index')
            ->with('success', 'Profession updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profession $profession)
    {
        $profession->delete();

        return redirect()->route('profession.index')
            ->with('success', 'Profession deleted successfully.');
    }
}
