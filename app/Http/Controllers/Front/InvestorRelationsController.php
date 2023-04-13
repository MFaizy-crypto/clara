<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\InvestorRelation;
use App\Models\Category;
use RahulHaque\Filepond\Facades\Filepond;
use Illuminate\Support\Facades\Storage;
use JsValidator;

class InvestorRelationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
    public function index()
    {
        $list = InvestorRelation::with('category')->get();
        $category = Category::get();
        return view('front.investor_relations',compact('list','category'));
    }
   
}
