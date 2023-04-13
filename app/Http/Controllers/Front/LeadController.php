<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\User;
use App\Jobs\MailJob;

class LeadController extends Controller
{
    protected $validater = [
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|between:10,12',
        'address' => 'required',
        'system_installer_1' => 'required',
        'system_installer_2' => 'required',
        'monthly_electric_usage' => 'required',
        'solar_system_type' => 'required',
        'solar_panels_place' => 'required',
        'materials_roof' => 'required',
        'contact' => 'required'
    ];

    protected $messages = [
        'name.required' =>'Please enter name.',
        'email.required' => 'Please enter email.',
        'email.unique' => 'Email alerady exists.',
        'phone.required' => 'Please enter phone no.',
        'phone.between' => 'The phone no must be between 10 and 12 characters.',
        'address.required' => 'Please enter Address.',
        'system_installer_1.required' => 'Please select system Installer 1.',
        'system_installer_2.required' => 'Please select system Installer 2.',
        'monthly_electric_usage.required' => 'Please select Mmnthly electric usage.',
        'solar_system_type.required' => 'Please select solar system type.',
        'solar_panels_place.required' => 'Please select solar panels place.',
        'materials_roof.required' => 'Please select materials on your roof.',
        'contact.required' => 'Please select preferred Contact Method.',
    ];

    protected $home_validater = [
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|between:10,12',
        'address' => 'required',
        'plant_options' => 'required',
        'type_of_surface' => 'required',
        'commercial_or_private' => 'required',
        'area_size' => 'required',
        'promotions' => 'required',
        'landowner' => 'required',
        'free_space_designation' => 'required',
        // 'owner_of_the_area' => 'required',
        'contact' => 'required'
    ];

    protected $home_messages = [
        'name.required' =>'Please enter name.',
        'email.required' => 'Please enter email.',
        'email.unique' => 'Email alerady exists.',
        'phone.required' => 'Please enter phone no.',
        'phone.between' => 'The phone no must be between 10 and 12 characters.',
        'address.required' => 'Please enter Address.',
        'plant_options.required' => 'Please select.',
        'type_of_surface.required' => 'Please select.',
        'commercial_or_private.required' => 'Please select.',
        'area_size.required' => 'Please select.',
        'promotions.required' => 'Please select.',
        'landowner.required' => 'Please select.',
        'free_space_designation.required' => 'Please select.',
        // 'owner_of_the_area.required' => 'Please select.',
        'contact.required' => 'Please select.',
    ];

    public function store(Request $request) {

        $this->validate($request, $this->validater,$this->messages);
        $lead = new Lead();
        $lead->name = $request->name;
        $lead->email = $request->email;
        $lead->phone = $request->phone;
        $lead->address = $request->address;
        $lead->system_installer_1 = $request->system_installer_1;
        $lead->system_installer_2 = $request->system_installer_2;
        $lead->monthly_electric_usage = $request->monthly_electric_usage;
        $lead->solar_system_type = $request->solar_system_type;
        $lead->solar_panels_place = $request->solar_panels_place;
        $lead->materials_roof = $request->materials_roof;
        $lead->contact_type = isset($request->contact) && $request->contact != "" ? (int)$request->contact : 0;
        try {
            $lead->save();
            $admin= User::where(["is_admin"=>1,"status" => 1])->first();
            $data = array();
            $data = $lead->toArray();
            $to = array();
            $to = array($lead['email'],$admin->email);
            $template = 'emails.leads_create';
            $from['email'] = env("MAIL_FROM_ADDRESS");
            $from['name'] = env("MAIL_FROM_NAME");
            $data['regards'] = env("MAIL_FROM_NAME");
            $cc = '';
            $subject = 'New Lead Request Details!';
            MailJob::dispatch($to, $from, $subject, '', $template, $data, $cc, '', []); 
            return response()->json(['status' => "success", 'message' => 'Lead Request has been created successfully!']);
        } catch(\Exception $e){
            return response()->json(['status' => "error", 'message' => 'Something went wrong'],500);
        }
    }

    public function storeLead(Request $request){
        $this->validate($request, $this->home_validater,$this->home_messages);
        $lead = new Lead();
        $lead->name = $request->name;
        $lead->email = $request->email;
        $lead->phone = $request->phone;
        $lead->address = $request->address;
        $lead->plant_options = $request->plant_options;
        $lead->type_of_surface = $request->type_of_surface;
        $lead->commercial_or_private = $request->commercial_or_private;
        $lead->area_size = $request->area_size;
        $lead->promotions = $request->promotions;
        $lead->landowner = $request->landowner;
        $lead->designation_of_the_free_space = $request->free_space_designation;
        // $lead->owner_of_the_area = $request->owner_of_the_area;
        $lead->contact_type = isset($request->contact) && $request->contact != "" ? (int)$request->contact : 0;
        try {
            $lead->save();
            $admin= User::where(["is_admin"=>1,"status" => 1])->first();
            $data = array();
            $data = $lead->toArray();
            $to = array();
            $to = array($lead['email'],$admin->email);
            $template = 'emails.home_leads';
            $from['email'] = env("MAIL_FROM_ADDRESS");
            $from['name'] = env("MAIL_FROM_NAME");
            $data['regards'] = env("MAIL_FROM_NAME");
            $cc = '';
            $subject = 'New Lead Request Details!';
            MailJob::dispatch($to, $from, $subject, '', $template, $data, $cc, '', []); 
            return response()->json(['status' => "success", 'message' => 'Lead Request has been created successfully!']);
        } catch(\Exception $e){
            return response()->json(['status' => "error", 'message' => 'Something went wrong'],500);
        }
    }
}
