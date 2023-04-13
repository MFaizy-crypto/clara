@extends('admin.layouts.master')
@section('section')
    <div id="content" class="main-content">
        <div class="container">
            <div class="container">
                <div class="row layout-top-spacing">
                    <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <div class="m-3"> <span style="font-size:18px;">Edit Lead</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <form
                                        enctype="multipart/form-data" id="verify_lead">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $data->id }}">
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="Name *" name="name"
                                                        value="{{ $data->name }}">
                                                    <div class="invalid-feedback name" role="alert"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" id="email"
                                                        placeholder="Email *" name="email" value="{{ $data->email }}">
                                                        <div class="invalid-feedback email" role="alert"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="phone">Telefon</label>
                                                    <input type="text" class="form-control" id="phone"
                                                        placeholder="Phone *" name="phone"
                                                        value="{{ $data->phone }}">
                                                        <div class="invalid-feedback phone" role="alert"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="address">Addresse</label>
                                                    <input type="text" class="form-control" id="address"
                                                        placeholder="Address *" name="address" value="{{ $data->address }}">
                                                        <div class="invalid-feedback address" role="alert"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="plant_options">Anlagenoptionen</label>
                                                    <select class="form-control" id="plant_options" name="plant_options">
                                                    @php
                                                    $plant_options = config('constant.plant_options');
                                                    @endphp
                                                    @if(isset($plant_options) && count($plant_options) > 0)
                                                    @foreach ($plant_options as $key => $value)
                                                                <option value="{{ $key }}" {{ isset($data->plant_options) && $data->plant_options == $key ? 'selected' : '' }}>{{ $value }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <div class="invalid-feedback plant_options" role="alert"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="type_of_surface">Art der Fläche</label>
                                                    <select class="form-control" id="type_of_surface" name="type_of_surface">
                                                    @php
                                                    $type_of_surface = config('constant.type_of_surface');
                                                    @endphp
                                                    @if(isset($type_of_surface) && count($type_of_surface) > 0)
                                                    @foreach ($type_of_surface as $key => $value)
                                                                <option value="{{ $key }}" {{ isset($data->type_of_surface) && $data->type_of_surface == $key ? 'selected' : '' }}>{{ $value }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <div class="invalid-feedback type_of_surface" role="alert"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="commercial_or_private">Gewerbe oder Privat</label>
                                                    <select class="form-control" id="commercial_or_private" name="commercial_or_private">
                                                    @php
                                                    $commercial_or_private = config('constant.commercial_or_private');
                                                    @endphp
                                                    @if(isset($commercial_or_private) && count($commercial_or_private) > 0)
                                                    @foreach ($commercial_or_private as $key => $value)
                                                                <option value="{{ $key }}" {{ isset($data->commercial_or_private) && $data->commercial_or_private == $key ? 'selected' : '' }}>{{ $value }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <div class="invalid-feedback commercial_or_private" role="alert"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="area_size">Flächengröße</label>
                                                    <select class="form-control" id="area_size" name="area_size">
                                                    @php
                                                    $area_size = config('constant.area_size');
                                                    @endphp
                                                    @if(isset($area_size) && count($area_size) > 0)
                                                    @foreach ($area_size as $key => $value)
                                                                <option value="{{ $key }}" {{ isset($data->area_size) && $data->area_size == $key ? 'selected' : '' }}>{{ $value }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <div class="invalid-feedback area_size" role="alert"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="promotions">Förderungen?</label>
                                                    <select class="form-control" id="promotions" name="promotions">
                                                    @php
                                                    $promotions = config('constant.promotions');
                                                    @endphp
                                                    @if(isset($promotions) && count($promotions) > 0)
                                                    @foreach ($promotions as $key => $value)
                                                                <option value="{{ $key }}" {{ isset($data->promotions) && $data->promotions == $key ? 'selected' : '' }}>{{ $value }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <div class="invalid-feedback promotions" role="alert"></div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="owner_of_the_area">Eigentümer der Fläche?</label>
                                                    <select class="form-control" id="owner_of_the_area" name="owner_of_the_area">
                                                    @php
                                                    $owner_of_the_area = config('constant.owner_of_the_area');
                                                    @endphp
                                                    @if(isset($owner_of_the_area) && count($owner_of_the_area) > 0)
                                                    @foreach ($owner_of_the_area as $key => $value)
                                                                <option value="{{ $key }}" {{ isset($data->owner_of_the_area) && $data->owner_of_the_area == $key ? 'selected' : '' }}>{{ $value }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <div class="invalid-feedback owner_of_the_area" role="alert"></div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <label for="contact">Preferred Contact Method</label>
                                                <div class="d-flex">
                                                    <div class="form-group input-radio" style="margin-right: 20px;">
                                                        <label class="label-radio">Egal
                                                        <input type="radio" name="contact" value="0" {{ isset($data->contact_type) && $data->contact_type == 0 ? "checked" : '' }}>
                                                        <span class="radio-indicator"></span>
                                                        </label>
                                                    </div><!-- /.input-radio -->
                                                    <div class="form-group input-radio" style="margin-right: 20px;">
                                                        <label class="label-radio">Vormittags
                                                        <input type="radio" name="contact" value="1" {{ isset($data->contact_type) && $data->contact_type == 1 ? "checked" : '' }}>
                                                        <span class="radio-indicator"></span>
                                                        </label>
                                                    </div><!-- /.input-radio -->
                                                    <div class="form-group input-radio" style="margin-right: 20px;">
                                                        <label class="label-radio">Nachmittags
                                                            <input type="radio" name="contact" value="2" {{ isset($data->contact_type) && $data->contact_type == 2 ? "checked" : '' }}>
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    </div><!-- /.input-radio -->
                                                <div class="invalid-feedback contact" role="alert"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-process" data-btn-process="Save Changes">Speichern</button>
                                        <a href="{{ url('/admin/users') }}" class="btn badge-danger pt-2">Abbrechen</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script type="text/javascript">
        $('#verify_lead').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('admin.lead.update') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                beforeSend: function() {
                    $('.btn-process').attr("disabled", true).html('Processing...');
                },
                success: function(data) {
                    if ($('.invalid-feedback').length > 0) {
                        $('.invalid-feedback').html('');
                    }
                    Swal.fire({
                        icon: 'success',
                        title: data.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    location.href = "{{url('/admin/lead')}}"
                },
                error: function(data) {
                    if ($('.invalid-feedback').length > 0) {
                        $('.invalid-feedback').html('');
                    }
                    if ($('.invalid-feedback strong').length > 0) {}
                    var errObj = jQuery.parseJSON(data.responseText);
                    $.each(errObj.errors, function(key, value) {
                        $("." + key).html('<strong>' + value + '</strong>').fadeIn();
                    });
                },
                complete: function() {
                    $('.btn-process').attr("disabled", false).html($('.btn-process').data(
                        'btn-process'));
                }
            });
        });
    </script>
@endsection
