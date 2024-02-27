<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contract;
use App\Models\EducationLevel;
use App\Models\Offer;
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
}
