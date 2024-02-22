<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Entreprise;
use App\Http\Requests\CreateEntrepriseRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class EntrepriseController extends Controller
{
    public function index()
{
    $entreprises = Entreprise::with('entrepriseRepre')->get();
    return view('entreprises.index', compact('entreprises'));
}

public function create()
{
    return view('entreprises.create'); 
}

public function store(CreateEntrepriseRequest $request)
{
    $validatedData = $request->validated();

        $entreprise = Entreprise::create($validatedData);
        $entreprise->entrepriseRepre()->associate(User::find($validatedData['user_id']));
        $entreprise->save();
        return redirect()->route('entreprises.index')->with('success', 'Entreprise created successfully.');
}

public function show(Entreprise $entreprise)
    {
        return view('entreprises.show', compact('entreprise'));
    }

    public function edit(Entreprise $entreprise)
    {
        return view('entreprises.edit', compact('entreprise'));
    }

    public function update(CreateEntrepriseRequest $request, Entreprise $entreprise)
    {
        $validatedData = $request->validated();

        $entreprise->update($validatedData);

       
        if ($validatedData['user_id'] != $entreprise->user_id) {
            $entreprise->entrepriseRepre()->associate(User::find($validatedData['user_id']));
            $entreprise->save();
        }

        return redirect()->route('entreprises.index')->with('success', 'Entreprise updated successfully.');
    }

    public function destroy(Entreprise $entreprise)
    {
        $entreprise->delete();

        return redirect()->route('entreprises.index')->with('success', 'Entreprise deleted successfully.');
    }
}
