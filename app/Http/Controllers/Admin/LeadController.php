<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
class LeadController extends Controller
{
    private $obj = '';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->obj = new Lead();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.lead.browse');
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
        return view('admin.lead.partials.list', compact('result', 'perPage', 'requestData'))->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Lead::find($id);
        return view('admin.lead.edit', compact('data'));
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
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|between:10,12',
            'address' => 'required',
            'plant_options' => 'required',
            'type_of_surface' => 'required',
            'commercial_or_private' => 'required',
            'area_size' => 'required',
            'promotions' => 'required',
            // 'owner_of_the_area' => 'required',
            'contact' => 'required'
        ];
        $messages = [
            'name.required' =>'Please enter name.',
            'email.required' => 'Please enter email.',
            'email.unique' => 'Email alerady exists.',
            'phone.required' => 'Please enter phone no.',
            'phone.between' => 'The phone no must be between 10 and 12 characters.',
            'address.required' => 'Please enter Address.',
            'plant_options.required' => 'Please select',
            'type_of_surface.required' => 'Please select',
            'commercial_or_private.required' => 'Please select.',
            'area_size.required' => 'Please select.',
            'promotions.required' => 'Please select.',
            // 'owner_of_the_area.required' => 'Please select.',
            'contact.required' => 'Please select preferred Contact Method.',
        ];
        $this->validate($request, $rulse,$messages);
        $lead = Lead::find($request->id);
        $lead->name = $request->name;
        $lead->email = $request->email;
        $lead->phone = $request->phone;
        $lead->address = $request->address;
        $lead->plant_options = $request->plant_options;
        $lead->type_of_surface = $request->type_of_surface;
        $lead->commercial_or_private = $request->commercial_or_private;
        $lead->area_size = $request->area_size;
        $lead->promotions = $request->promotions;
        // $lead->owner_of_the_area = $request->owner_of_the_area;
        $lead->contact_type = isset($request->contact) && $request->contact != "" ? (int)$request->contact : 0;
        try {
            $lead->save();
            return response()->json(['status' => "success", 'message' => "Lead request has been updated successfully!"]);
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
        $deleteLead = $this->obj->deleteLead($id);
        if($deleteLead == true) {
            return response()->json(['status' => "success", 'message' => 'Lead deleted Successfully']);
        } else {
            return response()->json(['status' => "error", 'message' => 'Something went wrong'],500);
        }
    }
}
