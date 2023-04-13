<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<div>
    @php 

            if(isset($data['name']))
            {
                $name='font-weight:bolder;';
            }
            if(isset($data['email']))
            {
                $email='font-weight:bolder;';
            }
            if(isset($data['phone']))
            {
                $phone='font-weight:bolder;';
            }
            if(isset($data['address']))
            {
                $address='font-weight:bolder;';
            }
            if(isset($data['system_installer_1']))
            {
                $system_installer_1='font-weight:bolder;';
            }
            if(isset($data['system_installer_2']))
            {
                $system_installer_2='font-weight:bolder;';
            }
            if(isset($data['monthly_electric_usage']))
            {
                $monthly_electric_usage='font-weight:bolder;';
            }
            if(isset($data['solar_system_type']))
            {
                $solar_system_type='font-weight:bolder;';
            }
            if(isset($data['solar_panels_place']))
            {
                $solar_panels_place='font-weight:bolder;';
            }
            if(isset($data['materials_roof']))
            {
                $materials_roof='font-weight:bolder;';
            }
            if(isset($data['contact_type']))
            {
                $contact_type='font-weight:bolder;';
            }
      
    @endphp
    <p>Hello ,</p>
    <p>Please find recently created leads details as mentioned below.</p>
    <div class="container">
        <div class="row" style="width:100%;">
            <div>
                <h3>Leads Information</h3>
                <table border="1" cellpadding="0" cellspacing="0" style="width:100%;border-color: #000;border-collapse:collapse;color: #3682b9;">
                    <tbody>
                        @if(isset($data['name']) && $data['name'] != "")
                                <tr>
                                    <td style="padding:5px;{{$name}}"><b>Name</b></td>
                                    <td style="padding:5px;{{$name}}">
                                        {{$data['name']}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['email']) && $data['email'] != "")
                                <tr>
                                    <td style="padding:5px;{{$email}}"><b>Email</b></td>
                                    <td style="padding:5px;{{$email}}">
                                        {{$data['email']}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['mobile']) && $data['mobile'] != "")
                                <tr>
                                    <td style="padding:5px;{{$mobile}}"><b>Phone</b></td>
                                    <td style="padding:5px;{{$mobile}}">
                                        {{$data['mobile']}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['address']) && $data['address'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Address</b></td>
                                    <td style="padding:5px;{{$address}}">
                                        {{$data['address']}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['system_installer_1']) && $data['system_installer_1'] != "")
                                <tr>
                                    <td style="padding:5px;"><b>System Installer 1</b></td>
                                    <td style="padding:5px;{{$system_installer_1}}">
                                    @if($data['system_installer_1'] === 1) System Installer 1
                                        @else( $data['system_installer_1'] === 2) System Installer 2
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['system_installer_2']) && $data['system_installer_2'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>System Installer 2</b></td>
                                    <td style="padding:5px;{{$system_installer_2}}">
                                    @if($data['system_installer_2'] == 1) System Installer 1
                                        @elseif( $data['system_installer_2'] == 2) System Installer 2
                                        @else
                                        None
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['monthly_electric_usage']) && $data['monthly_electric_usage'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Monthly Electric Usage</b></td>
                                    <td style="padding:5px;{{$monthly_electric_usage}}">
                                    @if($data['monthly_electric_usage'] == 1) 100
                                        @elseif( $data['monthly_electric_usage'] == 2) 200
                                        @else
                                        None
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['solar_system_type']) && $data['solar_system_type'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Solar Panels Type</b></td>
                                    <td style="padding:5px;{{$solar_system_type}}">
                                    @if($data['solar_system_type'] == 1) Solar system 1
                                        @elseif( $data['solar_system_type'] == 2) Solar system 2
                                        @else
                                        None
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['solar_panels_place']) && $data['solar_panels_place'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Solar Panels Place</b></td>
                                    <td style="padding:5px;{{$solar_panels_place}}">
                                    @if($data['solar_panels_place'] == 1) Solar panels 1
                                        @elseif( $data['solar_panels_place'] == 2) Solar panels 2
                                        @else
                                        None
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['materials_roof']) && $data['materials_roof'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Materials Roof</b></td>
                                    <td style="padding:5px;{{$materials_roof}}">
                                    @if($data['materials_roof'] == 1) Materials 1
                                        @elseif( $data['materials_roof'] == 2) Materials 2
                                        @else
                                        None
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['contact_type']) && $data['contact_type'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>contact_type</b></td>
                                    <td style="padding:5px;{{$contact_type}}">
                                    @if($data['contact_type'] === 1) Email
                                        @elseif( $data['contact_type'] === 2) Phone
                                        @else
                                        All
                                        @endif
                                    </td>
                                </tr>
                            @endif
                           
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <p>
    Regards,<br>
    {{$data['regards']}}
    </p>
</div>
        