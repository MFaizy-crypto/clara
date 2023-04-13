<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\InvestorRelation;
use App\Models\NewsArticle;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
    public function index()
    {
        $newsCount = NewsArticle::count();
        $investorCounts = InvestorRelation::count();
        return view('admin.dashboard',compact('investorCounts','newsCount'));
    }
    public function logout()
    {
        $user = Auth::user();
        Auth::logout($user);
        return redirect('/admin/login');
    }
}
