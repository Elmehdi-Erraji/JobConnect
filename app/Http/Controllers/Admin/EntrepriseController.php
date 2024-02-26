<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Entreprise;
use App\Http\Requests\CreateEntrepriseRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class EntrepriseController extends Controller
{
    public function index()
{
    $entreprises = Entreprise::with('entrepriseRepre')->get();
    return view('admin.entreprise.index', compact('entreprises'));
}

public function create()
    {
        // Assuming '2' is the role_id for the desired role (you may need to check your database)
        $role = Role::where('id', 2)->first();

        if (!$role) {
            abort(404, 'Role not found'); // Handle the case where the role with ID 2 is not found
        }

        $users = $role->users;

        return view('admin.entreprise.create', compact('users'));
    }
    public function store(CreateEntrepriseRequest $request)
    {
         //dd($request->all());
        $validatedData = $request->validated();
    
        // dd($validatedData);
    
        $entreprise = Entreprise::create($validatedData);
        $entreprise->entrepriseRepre()->associate(User::find($validatedData['user_id']));
        $entreprise->save();
    
        return redirect()->route('entreprise.index')->with('success', 'Entreprise created successfully.');
    }

public function show(Entreprise $entreprise)
    {
        return view('entreprise.show', compact('entreprise'));
    }

    public function edit(Entreprise $entreprise)
    {
        $role = Role::where('id', 2)->first();

        if (!$role) {
            abort(404, 'Role not found'); // Handle the case where the role with ID 2 is not found
        }

        $users = $role->users;
        return view('admin.entreprise.edit', compact('entreprise','users'));
    }

    public function update(CreateEntrepriseRequest $request, Entreprise $entreprise)
    {
        $validatedData = $request->validated();

        $entreprise->update($validatedData);

       
        if ($validatedData['user_id'] != $entreprise->user_id) {
            $entreprise->entrepriseRepre()->associate(User::find($validatedData['user_id']));
            $entreprise->save();
        }

        return redirect()->route('entreprise.index')->with('success', 'Entreprise updated successfully.');
    }

    public function destroy(Entreprise $entreprise)
    {
        $entreprise->delete();

        return redirect()->route('entreprise.index')->with('success', 'Entreprise deleted successfully.');
    }
}
