<?php

namespace App\Http\Controllers\REntreprise;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Http\Requests\OfferRequest;
use App\Models\Category;
use App\Models\Contract;
use App\Models\EducationLevel;
use App\Models\Profession;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{


    public function create()
{
    // Fetch data for dropdowns
    $educationLevels = EducationLevel::all();
    $professions = Profession::all();
    $categories = Category::all();
    $contracts = Contract::all();
    $entrepriseId = Auth::user()->entreprise->id;
    // You may also need to fetch $entrepriseId here

    return view('Entreprise.offer.create', compact('educationLevels', 'professions', 'categories', 'contracts', 'entrepriseId'));
}

public function store(OfferRequest $request)
{
    
    $validatedData = $request->validated();
    $entrepriseId = auth()->user()->entreprise->id;
    $validatedData['created_by'] = auth()->id();
    $validatedData['entreprise_id'] = $entrepriseId;

    $offer = Offer::create($validatedData);

    return redirect()->route('offers.index')->with('success', 'Offer created successfully.');
}

    public function edit(Offer $offer)
    {
        return view('Entreprise.offers.edit', compact('offer'));
    }

    public function update(OfferRequest $request, Offer $offer)
    {
        $validatedData = $request->validated();
        $offer->update($validatedData);
        return redirect()->route('Entreprise.offers.index')->with('success', 'Offer updated successfully.');
    }

    public function index()
{
   
    $entrepriseId = Auth::user()->entreprise->id;

    
    $offers = DB::table('offers')
        ->where('entreprise_id', $entrepriseId)
        ->select('offers.*')  
        ->get();

    return view('Entreprise.offer.index', compact('offers'));
}

    public function show(Offer $offer)
    {
        return view('offers.show', compact('offer'));
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();

        return redirect()->route('offers.index')->with('success', 'Offer deleted successfully.');
    }


    public function offersApplications()
{
    $userId = Auth::id();

  

    $applications = DB::table('offer_user')
    ->join('users', 'offer_user.user_id', '=', 'users.id')
    ->join('offers', 'offer_user.offer_id', '=', 'offers.id')
    ->select('users.name as user_name', 'offers.title as offer_title', 'offer_user.request_status')
    ->get();

    return view('Entreprise.offer.application', compact('applications'));
}
}
