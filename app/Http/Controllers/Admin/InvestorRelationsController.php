<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\InvestorRelation;
use App\Models\Category;
use RahulHaque\Filepond\Facades\Filepond;
use Illuminate\Support\Facades\Storage;
use JsValidator;
use Image;

class InvestorRelationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
    public function index(Request $request)
    {
        $dataQuery = InvestorRelation::with('category');
         if(isset($request->title_search) && !empty($request->title_search)){
            $dataQuery->where('title','LIKE','%'.$request->title_search.'%');
        }
        if(isset($request->cateory_search) && !empty($request->cateory_search)){
            $dataQuery->where('category_id',$request->cateory_search);
        }
        $list = $dataQuery->sortable()->paginate(10);
        $category = Category::get();
       // echo "<pre>";print_r($list);exit;
        return view('admin.investor_relations.index',compact('list','category','request'));
    }
   public function add()
   {
        $validater['title'] = 'required';
        $validater['image'] = 'mimes:jpeg,jpg,png|required';
        $validater['category'] = 'required';

       $validator = JsValidator::make($validater);
        $validator = JsValidator::make($validater);
        $category = Category::get();
      return view('admin.investor_relations.add',compact('validator','category'));
   }
   public function store(Request $request){
   

    $name = "";
    if($request->hasfile('image')){

            if (!file_exists(public_path().'/img/investor-relations')) {

                mkdir(public_path().'/img/investor-relations', 0777, true);
            }
            if (!file_exists(public_path().'/img/investor-relations/thumbnail')) {

                mkdir(public_path().'/img/investor-relations/thumbnail', 0777, true);
            }
          
                $filename=$request->file('image')->getClientOriginalName();
                $time = time();
                $name = $time.'.'. pathinfo($filename, PATHINFO_EXTENSION);
               $request->file('image')->move(public_path().'/img/investor-relations/', $name);
                $thumb = Image::make(public_path().'/img/investor-relations/'.$name)->resize(370,370)->save(public_path().'/img/investor-relations/thumbnail/'.$name);
        }
        $NewsArticle = new InvestorRelation();
        $NewsArticle->title = $request->title;
        $NewsArticle->category_id = $request->category;
        $NewsArticle->image = $name;
        $NewsArticle->save();
        return redirect()->route('investor-relations');
   }
   public function delete(Request $request){
     $NewsArticle = InvestorRelation::find($request->id);
     if (isset($NewsArticle)) {            
            $NewsArticle->delete();
             return response([
                'status' => 'true',
                'message' => 'data has been Deleted!'
            ]);
     }else {
        return response([
            'status' => 'false',
            'message' => 'Something went wrong!'
        ]);
    }
   }
   public function edit($id){
     $validater['title'] = 'required';
   // $validater['image'] = 'mimes:jpeg,jpg,png|required';
   
   $validator = JsValidator::make($validater);
    $validator = JsValidator::make($validater);
     $category = Category::get();
    $data = InvestorRelation::leftjoin('categories','categories.id','category_id')->select('investor_relations.*','categories.name as category_name')->where('investor_relations.id',$id)->first();
    return view('admin.investor_relations.edit',compact('data','validator','category'));
   }
   public function update(Request $request){
    //dd($request->all());

     $validater['title'] = 'required';
 if($request->hasfile('image')){
    $validater['image'] = 'mimes:jpeg,jpg,png|required';
 }
         $validation = Validator::make($request->all(), $validater);
         if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
         }
        $NewsArticle = InvestorRelation::find($request->id);
        $NewsArticle->title = $request->title;
        $NewsArticle->category_id = $request->category;


        if($request->hasfile('image')){

                if (!file_exists(public_path().'/img/investor-relations')) {

                    mkdir(public_path().'/img/investor-relations', 0777, true);
                }
                if (!file_exists(public_path().'/img/investor-relations/thumbnail')) {

                mkdir(public_path().'/img/investor-relations/thumbnail', 0777, true);
            }
            if(!empty($NewsArticle->image)){
                 
                  if (file_exists( public_path() . '/img/investor-relations/thumbnail/' . $NewsArticle->image)) {
                     unlink(public_path().'/img/investor-relations/thumbnail/'.$NewsArticle->image);
                 }
                 if (file_exists( public_path() . '/img/investor-relations/' . $NewsArticle->image)) {
                     unlink(public_path().'/img/investor-relations/'.$NewsArticle->image);
                 }

            }
              
                   $filename=$request->file('image')->getClientOriginalName();
                   $time = time();
                   $name = $time.'.'. pathinfo($filename, PATHINFO_EXTENSION);
                   $request->file('image')->move(public_path().'/img/investor-relations/', $name);
                   $thumb = Image::make(public_path().'/img/investor-relations/'.$name)->resize(370,370)->save(public_path().'/img/investor-relations/thumbnail/'.$name);
                   $NewsArticle->image = $name;
               
            }
        $NewsArticle->save();
        return redirect()->route('investor-relations');
   }
}
