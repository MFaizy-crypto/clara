<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<div>
    @php 
        $first_name = '';
        $last_name = '';
        $email='';
        $mobile='';
        $vcertificate='';
        $is_veried_vcertificate='';
        $passport='';
        $is_veried_passport='';
        $status='';
        $address='';
        if(($data['change_status'] == 'update') && (isset($data['old_data']))){
            if(isset($data['first_name']) && isset($data['old_data']['first_name']) && $data['first_name'] != $data['old_data']['first_name'])
            {
                $first_name='font-weight:bolder;';
            }
            if(isset($data['last_name']) && isset($data['old_data']['last_name']) && $data['last_name'] != $data['old_data']['last_name'])
            {
                $last_name='font-weight:bolder;';
            }
            if(isset($data['email']) && isset($data['old_data']['email']) && $data['email'] != $data['old_data']['email'])
            {
                $email='font-weight:bolder;';
            }
            if(isset($data['mobile']) && isset($data['old_data']['mobile']) && $data['mobile'] != $data['old_data']['mobile'])
            {
                $mobile='font-weight:bolder;';
            }
            if(isset($data['vcertificate']) && isset($data['old_data']['vcertificate']) && $data['vcertificate'] != $data['old_data']['vcertificate'])
            {
                $vcertificate='font-weight:bolder;';
            }
            if(isset($data['is_veried_vcertificate']) && isset($data['old_data']['is_veried_vcertificate']) && $data['is_veried_vcertificate'] !== $data['old_data']['is_veried_vcertificate'])
            {
                $is_veried_vcertificate='font-weight:bolder;';
            }
            if(isset($data['passport']) && isset($data['old_data']['passport']) && $data['passport'] != $data['old_data']['passport'])
            {
                $passport='font-weight:bolder;';
            }
            if(isset($data['is_veried_passport']) && isset($data['old_data']['is_veried_passport']) && $data['is_veried_passport'] !== $data['old_data']['is_veried_passport'])
            {
                $is_veried_passport='font-weight:bolder;';
            }
            if(isset($data['status']) && isset($data['old_data']['status']) && $data['status'] !== $data['old_data']['status'])
            {
                $status='font-weight:bolder;';
            }
            if(isset($data['address']) && isset($data['old_data']['address']) && $data['address'] != $data['old_data']['address'])
            {
                $address='font-weight:bolder;';
            }
        }
    @endphp
    <p>Hello ,</p>
    <p>Please find recently @if($data['change_status'] == 'update') updated @else created @endif Profile details as mentioned below.</p>
    <div class="container">
        <div class="row" style="width:100%;">
            @if($data['change_status'] == 'update')
                <div style="width:48%;float: left;">
                    <h3> old Information</h3>
                    <table border="1" cellpadding="0" cellspacing="0" style="width:100%;border-color: #000;border-collapse:collapse;color: #3682b9;">
                        <tbody>
                            @if(isset($data['old_data']['first_name']) && $data['old_data']['first_name'] != "")
                                <tr>
                                    <td style="padding:5px;"><b>First Name</b></td>
                                    <td style="padding:5px">
                                        {{$data['old_data']['first_name']}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['old_data']['last_name']) && $data['old_data']['last_name'] != "")
                                <tr>
                                    <td style="padding:5px;"><b>Last Name</b></td>
                                    <td style="padding:5px">
                                        {{$data['old_data']['last_name']}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['old_data']['email']) && $data['old_data']['email'] != "")
                                <tr>
                                    <td style="padding:5px;"><b>Email</b></td>
                                    <td style="padding:5px">
                                        {{$data['old_data']['email']}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['old_data']['mobile']) && $data['old_data']['mobile'] != "")
                                <tr>
                                    <td style="padding:5px;"><b>Phone</b></td>
                                    <td style="padding:5px">
                                        {{$data['old_data']['mobile']}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['old_data']['vcertificate']) && $data['old_data']['vcertificate'] != "")
                                <tr>
                                    <td style="padding:5px;"><b>Vcertificate</b></td>
                                    <td style="padding:5px">
                                        <a href="{{asset('images/vcertificate') . '/' . $data['old_data']['vcertificate']}}" download>View Vcertificate</a>
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['old_data']['is_veried_vcertificate']) && $data['old_data']['is_veried_vcertificate'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Vcertificate Status</b></td>
                                    <td style="padding:5px">
                                        @if($data['old_data']['is_veried_vcertificate'] === 1) Approved
                                        @elseif( $data['old_data']['is_veried_vcertificate'] === 2) Rejected 
                                        @else Pending
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['old_data']['passport']) && $data['old_data']['passport'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Passport</b></td>
                                    <td style="padding:5px">
                                        <a href="{{asset('images/userpassport') . '/' . $data['old_data']['passport']}}" download>View Passport</a>
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['old_data']['is_veried_passport']) && $data['old_data']['is_veried_passport'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Passport Status</b></td>
                                    <td style="padding:5px">
                                        @if($data['old_data']['is_veried_passport'] === 1) Approved
                                        @elseif( $data['old_data']['is_veried_passport'] === 2) Rejected 
                                        @else Pending
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['old_data']['address']) && $data['old_data']['address'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Address</b></td>
                                    <td style="padding:5px;">
                                        {{$data['old_data']['address']}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['old_data']['created_at']))
                                <tr>
                                    <td style="padding:5px;"><b>Created Date</b></td>
                                    <td style="padding:5px">
                                        {{(isset($data['old_data']['created_at']) && $data['old_data']['created_at'] != '') ?date('d-M-Y (h:i A)',strtotime($data['old_data']['created_at'])):'N/A'}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['old_data']['updated_at']))
                                <tr>
                                    <td style="padding:5px;"><b>Updated Date</b></td>
                                    <td style="padding:5px">
                                        {{(isset($data['old_data']['updated_at']) && $data['old_data']['updated_at'] != '') ?date('d-M-Y (h:i A)',strtotime($data['old_data']['updated_at'])):'N/A'}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['old_data']['status']) && $data['old_data']['status'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>User Status</b></td>
                                    <td style="padding:5px;">
                                        @if($data['old_data']['status'] === 1) Active
                                        @else In Active
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            @endif
            <div @if($data['change_status'] == 'update') style="width:48%;float: right;" @else style="width:100%;" @endif>
                <h3>@if($data['change_status'] == 'update') Updated @else User @endif Information</h3>
                <table border="1" cellpadding="0" cellspacing="0" style="width:100%;border-color: #000;border-collapse:collapse;color: #3682b9;">
                    <tbody>
                        @if(isset($data['first_name']) && $data['first_name'] != "")
                                <tr>
                                    <td style="padding:5px;{{$first_name}}"><b>First Name</b></td>
                                    <td style="padding:5px;{{$first_name}}">
                                        {{$data['first_name']}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['last_name']) && $data['last_name'] != "")
                                <tr>
                                    <td style="padding:5px;{{$last_name}}"><b>Last Name</b></td>
                                    <td style="padding:5px;{{$last_name}}">
                                        {{$data['last_name']}}
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
                            @if(isset($data['vcertificate']) && $data['vcertificate'] != "")
                                <tr>
                                    <td style="padding:5px;"><b>Vcertificate</b></td>
                                    <td style="padding:5px;{{$vcertificate}}">
                                        <a href="{{asset('images/vcertificate') . '/' . $data['vcertificate']}}" download>View Vcertificate</a>
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['is_veried_vcertificate']) && $data['is_veried_vcertificate'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Vcertificate Status</b></td>
                                    <td style="padding:5px;{{$is_veried_vcertificate}}">
                                        @if($data['is_veried_vcertificate'] === 1) Approved
                                        @elseif( $data['is_veried_vcertificate'] === 2) Rejected 
                                        @else Pending
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['passport']) && $data['passport'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Passport</b></td>
                                    <td style="padding:5px;{{$passport}}">
                                        <a href="{{asset('images/userpassport') . '/' . $data['passport']}}" download>View Passport</a>
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['is_veried_passport']) && $data['is_veried_passport'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Passport Status</b></td>
                                    <td style="padding:5px;{{$is_veried_passport}}">
                                        @if($data['is_veried_passport'] === 1) Approved
                                        @elseif( $data['is_veried_passport'] === 2) Rejected 
                                        @else Pending
                                        @endif
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
                            @if(isset($data['created_at']))
                                <tr>
                                    <td style="padding:5px;"><b>Created Date</b></td>
                                    <td style="padding:5px;">
                                        {{(isset($data['created_at']) && $data['created_at'] != '') ?date('d-M-Y (h:i A)',strtotime($data['created_at'])):'N/A'}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['updated_at']))
                                <tr>
                                    <td style="padding:5px;"><b>Updated Date</b></td>
                                    <td style="padding:5px;">
                                        {{(isset($data['updated_at']) && $data['updated_at'] != '') ?date('d-M-Y (h:i A)',strtotime($data['updated_at'])):'N/A'}}
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['status']) && $data['status'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>User Status</b></td>
                                    <td style="padding:5px;{{$status}}">
                                        @if($data['status'] == 1) Active
                                        @else In Active
                                        @endif
                                    </td>
                                </tr>
                            @endif
                    </tbody>
                </table>
            </div>
            @if($data['change_status'] == 'update')
                <div style="clear: both;"></div>
            @endif
        </div>
    </div>

    @if(isset($data['comment']) && $data['comment'] != "")
        <b><p>Admin comment</p></b>
        <p>Admin comment{{$data['comment']}}</p>
    @endif
    @if(isset($data['send_to']) && $data['send_to'] == "admin")
        <h5>For More Information Please <a href="{{$data['link']}}">Click Here</a></h5><br>
    @endif
    <br>
    <p>
    Regards,<br>
    {{$data['regards']}}
    </p>
</div>
