<?php

namespace App\Http\Controllers\REntreprise;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Http\Requests\OfferRequest;
use App\Models\Category;
use App\Models\Contract;
use App\Models\EducationLevel;
use App\Models\Profession;
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
}
