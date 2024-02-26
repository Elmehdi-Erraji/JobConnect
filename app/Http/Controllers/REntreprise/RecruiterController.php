<?php
// app\Http\Controllers\RecruiterController.php

namespace App\Http\Controllers\REntreprise;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRecuiterRequest;
use App\Models\User;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecruiterController extends Controller
{
    public function index()
    {
        $responsableEntreprise = Auth::user();
        $recruiters = $responsableEntreprise->entreprise->Recrut;
        return view('Entreprise.index', compact('recruiters'));
    }

    public function create()
    {
        return view('Entreprise.recruiters.create', compact('availableRecruiters'));
    }

    public function store(CreateRecuiterRequest $request)
    {
        $request->validate();
        $responsableEntreprise = Auth::user();

        $recruiter = User::create([
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), 
            'status' => $request->input('status'),
        ]);


        $responsableEntreprise->entreprise->Recrut()->attach($recruiter->id, ['role_id' => 3]);



        return redirect()->route('recruiters.index')->with('success', 'Recruiters added successfully.');
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

