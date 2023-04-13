<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    private $obj = '';
    private $obj_comp = '';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->obj = new User();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.users.browse');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $page
     * @return \Illuminate\Http\Response
     */
    public function getList(Request $request)
    {
        $perPage = 10;
        $requestData = $request->all();
        $result = $this->obj->getListWithFilter(['select' => "*", 'paginate' => $perPage, 'requestData' => $requestData]);
        return view('admin.users.partials.list', compact('result', 'perPage', 'requestData'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create', compact('roles', 'company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required'],
            'email' => ['required', 'unique:users,email', 'regex:' . EMAIL_REGEX_VALIDATION],
            'password' => ['required', 'same:confirm_password', 'min:8', 'regex:/(?=.*\d)(?=.*[a-zA-Z])(?=.*\W)/'],
            'mobile_number' => ['nullable', 'numeric'],
            'additional_contact' => ['nullable', 'numeric'],
            'roles' => ['required'],
            'company' => ['required'],
            '_avatar' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5000'],
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['uuid'] = (string)\Str::uuid();
        $input['mobile_number'] = $request->hidden_contact_number . '-' . $request->mobile_number;
        $input['email_verified_at'] = Carbon::now();
        $input['status'] = isset($request->status) ? 1 : 0;

        if ($request->hasFile('_avatar')) {
            $input['avatar'] = fileUploading(['file_name' => $request->_avatar, 'file_path' => 'usr']);
        }
        $input['company_id'] = $request->company;

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return response()->json(['status' => "success", 'message' => 'User created Successfully', 'redirection' => route('admin.users.edit', $user->id)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('countryInfo')->find($id);
        $roles = $user ? $user->getRoleNames()->toArray() : '-';
        $company = $user ?Company::select('name', 'administrator_email', 'contact_number')->find($user->company_id) : '';

        return view('admin.users.show', compact('user', 'roles', 'company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.users.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $rulse = [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users,email,'.$request->id,
            'phone' => 'required|between:10,12',
            'address' => 'required',
            'comment' => 'required',
            'upload_certificate' => 'mimes:jpeg,jpg,png,pdf',
            'upload_passport' => 'mimes:jpeg,jpg,png,pdf',
        ];
        $messages = [
            'first_name.required' => 'Please enter first name.',
            'last_name.required' => 'Please enter last name.',
            'email.required' => 'Please enter email.',
            'comment.required' => 'Please enter comment.',
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
        $user = User::find($request->id);
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
        }
        $user->is_veried_passport = isset($request->is_veried_passport) && $request->is_veried_passport != 0 ? $request->is_veried_passport : 0 ;
        $user->is_veried_vcertificate = isset($request->is_veried_vcertificate) && $request->is_veried_vcertificate != 0 ? $request->is_veried_vcertificate : 0;
        if($user->is_veried_passport == 1 && $user->is_veried_vcertificate == 1) {
            $user->status = 1;
        } else {
            $user->status = 0;
        }
        $user->name = $request->first_name." ".$request->last_name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->mobile = $request->phone;
        $user->address = $request->address;
        $user->comment = $request->comment;
        try {
            $user->save();
            $userObj = new User();
            $userObj->sendUpdateMail(["id" => $user->id,"subject" => "Your profile has been updated by admin!","send_to" => "user", "old_data" => $userDetails, "status" => "update"]);
            return response()->json(['status' => "success", 'message' => "User's profile has been updated successfully!"]);
        } catch(\Exception $e){
            return response()->json(['status' => "error", 'message' => 'Something went wrong'],500);
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteUser = $this->obj->deleteUser($id);
        if($deleteUser == true) {
            return response()->json(['status' => "success", 'message' => 'User deleted Successfully']);
        } else {
            return response()->json(['status' => "error", 'message' => 'Something went wrong'],500);
        }
    }
}
