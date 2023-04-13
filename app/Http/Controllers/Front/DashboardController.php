<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\NewsArticle;
use App\Models\Project;
use RahulHaque\Filepond\Facades\Filepond;
use Illuminate\Support\Facades\Storage;
use JsValidator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
      protected $validater = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'phone' => 'required|between:10,12',
        'address' => 'required',
        'password' => 'required|min:8',
        'upload_certificate' => 'required|mimes:jpeg,jpg,png,pdf',
        'upload_passport' => 'required|mimes:jpeg,jpg,png,pdf',

     ];     
     protected $messages = [
        'first_name.required' => 'Please enter first name.',
        'last_name.required' => 'Please enter last name.',
        'email.required' => 'Please enter email.',
        'email.unique' => 'Email alerady exists.',
        'phone.required' => 'Please enter mobile no.',
        'phone.between' => 'The mobile no must be between 10 and 12 characters.',
        'password.required' => 'Please enter password.',
        'upload_certificate.required' => 'Please upload certificate.',
        'upload_certificate.mimes' => 'The document must be a file of type: jpeg, jpg, png, pdf.',
        'upload_passport.required' => 'Please upload passport.',
        'upload_passport.mimes' => 'The document must be a file of type: jpeg, jpg, png, pdf.',

     ];
        
    public function index()
    {
        $list = NewsArticle::orderBy('id','DESC')->limit(3)->get();
        $projects = Project::get();
        return view('front.welcome',compact('list','projects'));
    }

    public function viewRegister()
    {
        return view('front.auth.register');
    }

    public function viewLogin()
    {
        return view('front.auth.login');
    }

    public function viewProfile()
    {
        return view('front.auth.user_profile');
    }


    public function register(Request $request) {
        $this->validate($request, $this->validater,$this->messages);
        $filename = NULL;
        $passportfile = NULL;
        if($request->file('upload_certificate') !=  ''){
            $vcertificate = $request->file('upload_certificate');
            $filename = "vcertificate_".time().'.'.$vcertificate->getClientOriginalExtension();
            $destinationPath = public_path('/images/vcertificate');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $vcertificate->move($destinationPath, $filename);
        }

        if($request->file('upload_passport') !=  ''){
            $passport = $request->file('upload_passport');
            $passportfile = "passport_".time().'.'.$passport->getClientOriginalExtension();
            $destinationPath = public_path('/images/userpassport');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $passport->move($destinationPath, $passportfile);
        }
        
        $password = $request->password;
        $user = new User();
        $user->name = $request->first_name." ".$request->last_name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->mobile = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($password);
        $user->vcertificate = $filename;
        $user->passport = $passportfile;
        try{
            $user->save();
            Auth::login($user);
            $userObj = new User();
            $userObj->sendUpdateMail(["id" => auth()->user()->id,"subject" => "User's profile has been registered successfully!","send_to" => "admin","old_data" => [], "status" => "create"]);
            return response()->json(['status' => "success", 'message' => 'Your profile has been registered successfully!']);
        } catch(\Exception $e){
            return response()->json(['status' => "error", 'message' => 'Something went wrong'],500);
        }
    }

    public function updateProfile(Request $request) {
        $rulse = [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users,email,'.auth()->user()->id,
            'phone' => 'required|between:10,12',
            'address' => 'required',
            'upload_certificate' => 'mimes:jpeg,jpg,png,pdf',
            'upload_passport' => 'mimes:jpeg,jpg,png,pdf',
        ];
        $messages = [
            'first_name.required' => 'Please enter first name.',
            'last_name.required' => 'Please enter last name.',
            'email.required' => 'Please enter email.',
            'email.unique' => 'Email alerady exists.',
            'phone.required' => 'Please enter mobile no.',
            'phone.between' => 'The mobile no must be between 10 and 12 characters.',
            'password.required' => 'Please enter password.',
            'upload_certificate.required' => 'Please upload certificate.',
            'upload_certificate.mimes' => 'The document must be a file of type: jpeg, jpg, png, pdf.',
            'upload_passport.required' => 'Please upload passport.',
            'upload_passport.mimes' => 'The document must be a file of type: jpeg, jpg, png, pdf.',
        ];
        $this->validate($request, $rulse,$messages);
        $filename = NULL;
        $passportfile = NULL;
        $user = User::find(auth()->user()->id);
        $userDetails = clone $user;
        if($request->file('upload_certificate') !=  ''){
            $vcertificate = $request->file('upload_certificate');
            $filename = "vcertificate_".time().'.'.$vcertificate->getClientOriginalExtension();
            $destinationPath = public_path('/images/vcertificate');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $vcertificate->move($destinationPath, $filename);
            $user->vcertificate = $filename;
            $user->is_veried_vcertificate = 0;
        }

        if($request->file('upload_passport') !=  ''){
            $passport = $request->file('upload_passport');
            $passportfile = "passport_".time().'.'.$passport->getClientOriginalExtension();
            $destinationPath = public_path('/images/userpassport');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $passport->move($destinationPath, $passportfile);
            $user->passport = $passportfile;
            $user->is_veried_passport = 0;
        }

        $user->name = $request->first_name." ".$request->last_name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->mobile = $request->phone;
        $user->address = $request->address;
        try {
            $user->save();
            $userObj = new User();
            $userObj->sendUpdateMail(["id" => auth()->user()->id,"subject" => "User has updated his information!","send_to" => "admin", "old_data" => $userDetails, "status" => "update"]);
            return response()->json(['status' => "success", 'message' => 'Your profile has been updated successfully!']);
        } catch(\Exception $e){
            return response()->json(['status' => "error", 'message' => 'Something went wrong'],500);
        }
        return redirect()->back();
    }
}
