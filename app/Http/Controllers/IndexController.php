<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contract;
use App\Models\EducationLevel;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();
        $education_levels = EducationLevel::all();
        $offers = Offer::all();
        $categories = Category::latest()->take(6)->get();
        $offers = Offer::with('educationLevel', 'profession', 'category','contract','entreprise')->get();
        return view ('welcome',compact('contracts','education_levels','offers','categories','offers'));

    }

    public function apply(Request $request)
    {
      
        $user = User::findOrFail($request->user_id);
        $offer = Offer::findOrFail($request->job_id);

        if ($user->offers()->where('offer_id', $offer->id)->exists()) {
            return redirect()->route('home')->with('success', 'You have already applied for this offer.');
        }
        $user->offers()->attach($offer, ['request_status' => 0]);

        return redirect()->route('home')->with('success', 'Your job application has been submitted successfully!');

    }
}
