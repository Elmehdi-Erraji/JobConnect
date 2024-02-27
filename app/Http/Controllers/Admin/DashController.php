<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Entreprise;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $offerCount = Offer::count();
        $enterpriseCount = Entreprise::count();
        $requestCount = DB::table('offer_user')
        ->where('request_status')
        ->count();
    
        return view('admin.index' , compact('userCount','offerCount','enterpriseCount','requestCount'));
    }
}
