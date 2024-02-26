<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view ('Admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view ('Admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->addMediaFromRequest('avatar')->usingName($user->name)->toMediaCollection('avatars','avatars');
        $user->roles()->attach($request->role);
        return redirect()->route('users.index')->with('success', 'user created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $roles = role::all();
        return view ('Admin.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        
        $user->roles()->sync($request->role);
        $user->status = $request->status;
    
        // Check if the user is banned and reason field is provided
        if ($request->status == 3 && $request->filled('ban_reason')) {
            $user->ban_reason = $request->input('ban_reason');
        }
    
        $user->save();
        
        return redirect()->route('users.index')->with('success', 'User has been updated successfully');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','user deleted successfully');
    }
}
