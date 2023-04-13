<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use Image;
use RahulHaque\Filepond\Facades\Filepond;
use Illuminate\Support\Facades\Storage;
use JsValidator;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
    public function index(Request $request)
    {
       // echo "<pre>";print_r($request->all());exit;
        $dataQuery = Project::sortable();
        if(isset($request->title_search) && !empty($request->title_search)){
            $dataQuery->where('title','LIKE','%'.$request->title_search.'%');
        }
        if(isset($request->description_search) && !empty($request->description_search)){
            $dataQuery->where('description','LIKE','%'.$request->description_search.'%');
        }
        $list = $dataQuery->paginate(10);
        return view('admin.projects.index',compact('list','request'));
    }
   public function add()
   {
        $validater['title'] = 'required';
        $validater['image'] = 'mimes:jpeg,jpg,png|required';

       $validator = JsValidator::make($validater);
     
      return view('admin.projects.add',compact('validator'));
   }
   public function store(Request $request){
   

    $name = "";
    if($request->hasfile('image')){

            if (!file_exists(public_path().'/img/projects')) {

                mkdir(public_path().'/img/projects', 0777, true);
            }
          if (!file_exists(public_path().'/img/projects/thumbnail')) {

                mkdir(public_path().'/img/projects/thumbnail', 0777, true);
            }
                $filename=$request->file('image')->getClientOriginalName();
                $time = time();
                $name = $time.'.'. pathinfo($filename, PATHINFO_EXTENSION);
               
               $request->file('image')->move(public_path().'/img/projects/', $name);
               $thumb = Image::make(public_path().'/img/projects/'.$name)->resize(370,370)->save(public_path().'/img/projects/thumbnail/'.$name);
           
        }
        $NewsArticle = new Project();
        $NewsArticle->title = $request->title;
        $NewsArticle->description = $request->description_hidden;
        $NewsArticle->image = $name;
        $NewsArticle->save();
        return redirect()->route('projects');
   }
   public function delete(Request $request){
     $NewsArticle = Project::find($request->id);
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
    //$validator = JsValidator::make($validater);
    $data = Project::find($id);
    return view('admin.projects.edit',compact('data','validator'));
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
        $NewsArticle = Project::find($request->id);
        $NewsArticle->title = $request->title;
        $NewsArticle->description = $request->description_hidden;


        if($request->hasfile('image')){

                if (!file_exists(public_path().'/img/projects')) {

                    mkdir(public_path().'/img/projects', 0777, true);
                }
               if (!file_exists(public_path().'/img/projects/thumbnail')) {

                mkdir(public_path().'/img/projects/thumbnail', 0777, true);
            }
            if(!empty($NewsArticle->image)){

                  if (file_exists( public_path() . '/img/projects/thumbnail/' . $NewsArticle->image)) {
                     unlink(public_path().'/img/projects/thumbnail/'.$NewsArticle->image);
                 }
                 if (file_exists( public_path() . '/img/projects/' . $NewsArticle->image)) {
                     unlink(public_path().'/img/projects/'.$NewsArticle->image);
                 }

            }
                   $filename=$request->file('image')->getClientOriginalName();
                   $time = time();
                   $name = $time.'.'. pathinfo($filename, PATHINFO_EXTENSION);
                   $request->file('image')->move(public_path().'/img/projects/', $name);
                   $thumb = Image::make(public_path().'/img/projects/'.$name)->resize(370,370)->save(public_path().'/img/projects/thumbnail/'.$name);
                   $NewsArticle->image = $name;
               
            }
        $NewsArticle->save();
        return redirect()->route('projects');
   }
}
