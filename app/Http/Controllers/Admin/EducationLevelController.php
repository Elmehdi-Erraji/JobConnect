<?php

namespace App\Http\Controllers;

use App\Models\EducationLevel;
use App\Http\Requests\CreateEducationLevelRequest;
use Illuminate\Http\Request;

class EducationLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educationLevels = EducationLevel::all();

        return view('education_levels.index', compact('educationLevels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education_levels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CreateEducationLevelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEducationLevelRequest $request)
    {
        EducationLevel::create($request->validated());

        return redirect()->route('education_levels.index')
            ->with('success', 'Education level created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EducationLevel  $educationLevel
     * @return \Illuminate\Http\Response
     */
    public function show(EducationLevel $educationLevel)
    {
        return view('education_levels.show', compact('educationLevel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EducationLevel  $educationLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(EducationLevel $educationLevel)
    {
        return view('education_levels.edit', compact('educationLevel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CreateEducationLevelRequest  $request
     * @param  \App\Models\EducationLevel  $educationLevel
     * @return \Illuminate\Http\Response
     */
    public function update(CreateEducationLevelRequest $request, EducationLevel $educationLevel)
    {
        $educationLevel->update($request->validated());

        return redirect()->route('education_levels.index')
            ->with('success', 'Education level updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EducationLevel  $educationLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(EducationLevel $educationLevel)
    {
        $educationLevel->delete();

        return redirect()->route('education_levels.index')
            ->with('success', 'Education level deleted successfully.');
    }
}
