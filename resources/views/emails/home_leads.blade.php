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
            if(isset($data['plant_options']))
            {
                $plant_options='font-weight:bolder;';
            }
            if(isset($data['type_of_surface']))
            {
                $type_of_surface='font-weight:bolder;';
            }
            if(isset($data['commercial_or_private']))
            {
                $commercial_or_private='font-weight:bolder;';
            }
            if(isset($data['area_size']))
            {
                $area_size='font-weight:bolder;';
            }
            if(isset($data['promotions']))
            {
                $promotions='font-weight:bolder;';
            }
            if(isset($data['landowner']))
            {
                $landowner='font-weight:bolder;';
            }
            if(isset($data['designation_of_the_free_space']))
            {
                $designation_of_the_free_space='font-weight:bolder;';
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
                            @if(isset($data['plant_options']) && $data['plant_options'] != "")
                                <tr>
                                    <td style="padding:5px;"><b>Anlagenoptionen</b></td>
                                    <td style="padding:5px;{{$plant_options}}">
                                    @if($data['plant_options'] == 1) Photovoltaik
                                        @elseif( $data['plant_options'] == 2) Photovoltaik mit Speicher
                                        @elseif( $data['plant_options'] == 3) E-Fuels
                                        @else
                                        None
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['type_of_surface']) && $data['type_of_surface'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Art der Fläche</b></td>
                                    <td style="padding:5px;{{$type_of_surface}}">
                                    @if($data['type_of_surface'] == 1) Freifläche
                                        @elseif( $data['type_of_surface'] == 2) Gebäudefläche
                                        @else
                                        None
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['commercial_or_private']) && $data['commercial_or_private'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Gewerbe oder Privat</b></td>
                                    <td style="padding:5px;{{$commercial_or_private}}">
                                    @if($data['commercial_or_private'] == 1) Gewerbe
                                        @elseif( $data['commercial_or_private'] == 2) Gewerbe
                                        @else
                                        None
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['area_size']) && $data['area_size'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Flächengrösse</b></td>
                                    <td style="padding:5px;{{$area_size}}">
                                    @if($data['area_size'] == 1) Freifläche < 5HA
                                        @elseif( $data['area_size'] == 2) Freifläche >5HA
                                        @elseif( $data['area_size'] == 3) Gebäudefläche < 500m2
                                        @elseif( $data['area_size'] == 4) Gebäudefläche >500m2
                                        @else
                                        None
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['promotions']) && $data['promotions'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Förderungen</b></td>
                                    <td style="padding:5px;{{$promotions}}">
                                    @if($data['promotions'] == 1) Benötige Informationen
                                        @elseif( $data['promotions'] == 2) Förderung vorhanden
                                        @else
                                        None
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['landowner']) && $data['landowner'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Flächeneigentümer</b></td>
                                    <td style="padding:5px;{{$landowner}}">
                                    @if($data['landowner'] == 1) Identisch mit Anfragensteller
                                        @elseif( $data['landowner'] == 2) Pächter
                                        @else
                                        None
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['designation_of_the_free_space']) && $data['designation_of_the_free_space'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>Bezeichnung der Freifläche</b></td>
                                    <td style="padding:5px;{{$designation_of_the_free_space}}">
                                    @if($data['designation_of_the_free_space'] == 1) Konversionsfläche
                                        @elseif( $data['designation_of_the_free_space'] == 2) Autobahnrandstreifen
                                        @elseif( $data['designation_of_the_free_space'] == 3) Eisenbahnrandstreifen
                                        @elseif( $data['designation_of_the_free_space'] == 4) Strukturschwaches Grünland
                                        @elseif( $data['designation_of_the_free_space'] == 5) Strukturstarkes Grünland
                                        @elseif( $data['designation_of_the_free_space'] == 6) Strukturschwaches Ackerland
                                        @elseif( $data['designation_of_the_free_space'] == 7) Strukturstarkes Ackerland
                                        @else
                                        None
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if(isset($data['contact_type']) && $data['contact_type'] !== "")
                                <tr>
                                    <td style="padding:5px;"><b>contact</b></td>
                                    <td style="padding:5px;{{$contact_type}}">
                                    @if($data['contact_type'] === 1) Vormittags
                                        @elseif( $data['contact_type'] === 2) Nachmittags
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
        