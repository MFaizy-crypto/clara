<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\NewsArticle;
use RahulHaque\Filepond\Facades\Filepond;
use Illuminate\Support\Facades\Storage;
use JsValidator;

class NewsArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
    public function index()
    {
        $list = NewsArticle::paginate(6);
        return view('front.news',compact('list'));
    }
    public function details($id)
    {
        $details = NewsArticle::find($id);
        return view('front.blog_single_post',compact('details'));
    }
}
