<?php
// app\Http\Controllers\RecruiterController.php

namespace App\Http\Controllers\REntreprise;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRecuiterRequest;
use App\Models\User;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecruiterController extends Controller
{
    public function index()
{// Get the authenticated user's entreprise id
    $entrepriseId = Auth::user()->entreprise->id;

    // Get all users where entreprise_id is the same as the authenticated user's entreprise id and role_id is 3
    $recruiters = DB::table('entreprise_user')
        ->where('entreprise_id', $entrepriseId)
        ->where('role_id', 3)
        ->join('users', 'entreprise_user.user_id', '=', 'users.id')
        ->select('users.*')
        ->get();

    return view('Entreprise.recruiters.index', compact('recruiters'));
}

    public function create()
    {
        return view('Entreprise.recruiters.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->all();


    // Add 'role' key to the validated data
    $validatedData['role'] = 3;
     
    // dd($validatedData);
    // Create the user
    $user = User::create($validatedData);
    $entrepriseId = auth()->user()->entreprise->id;

    // Insert into the entreprise_user table
    DB::table('entreprise_user')->insert([
        'user_id' => $user->id,
        'entreprise_id' => $entrepriseId,
        'role_id' => $validatedData['role'],
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->route('recuiters.index')->with('success', 'User created successfully.');
}
  
    
    


    public function edit($id)
    {
        $responsableEntreprise = Auth::user();
        $recruiter = $responsableEntreprise->entreprise->Recrut->find($id);
        return view('recruiters.edit', compact('recruiter'));
    }

    public function update(CreateRecuiterRequest $request, $id)
    {
        $responsableEntreprise = Auth::user();  
        $recruiter = $responsableEntreprise->entreprise->Recrut->find($id);
        $recruiter->update([
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), 
            'status' => $request->input('status'),
        ]);
        return redirect()->route('recruiters.index')->with('success', 'Recruiter updated successfully.');
    }
}

