<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\EducationLevel;
use App\Models\Profession;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
   
    public function index(): View
    {
        $user = Auth::user();
        $userProfile = $user->profile()->first();
        $professions = Profession::orderBy('name')->get();
        $education_level = EducationLevel::orderBy('name')->get();
        return view('profile.index', compact('user','professions','education_level','userProfile'));
    }

    public function update(ProfileUpdateRequest $request , $id)
    {

     
        //update the user information 

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        if ($request->hasFile('avatar')) {
           
            if ($user->getFirstMediaUrl('avatars')) {
                $user->clearMediaCollection('avatars');
            }
            $media = $user->addMedia($request->file('avatar'))->toMediaCollection('avatars','avatars');
        }

        $user->update();
        
        $profile = $user->profile()->updateOrCreate(
            [],
            [
                'profession_id' => $request->input('profession'),
                'education_level_id' => $request->input('education_level'),
                'motivation' => $request->input('motivation'),
            ]
        );

        if ($request->hasFile('cv')) {
           
            if ($user->getFirstMediaUrl('cvs')) {
                $user->clearMediaCollection('cvs');
            }
            $media = $user->addMedia($request->file('cv'))->toMediaCollection('cvs','cvs');
        }

        return redirect()->route('profile.index')->with('success', 'profile updated successfully');


    }



    

   
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


}
