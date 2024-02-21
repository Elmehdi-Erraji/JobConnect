<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();

        return view('profiles.index', compact('profiles'));
    }

    public function create()
    {

        return view('profiles.create');
    }

    public function store(UpdateProfileRequest $request)
    {
        Profile::create($request->validated());



        return redirect()->route('profiles.index')
            ->with('success', 'Profile created successfully.');
    }

    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }

    public function edit(Profile $profile)
    {

        return view('profiles.edit', compact('profile'));
    }

    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        $profile->update($request->validated());



        return redirect()->route('profiles.edit', $profile->id)
            ->with('success', 'Profile updated successfully.');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();



        return redirect()->route('profiles.index')
            ->with('success', 'Profile deleted successfully.');
    }
}
