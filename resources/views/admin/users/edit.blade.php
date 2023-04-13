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
                                        <div class="m-3"> <span style="font-size:18px;">Edit User</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <form
                                        enctype="multipart/form-data" id="verify_users">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $data->id }}">
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="first_name">First Name</label>
                                                    <input type="text" class="form-control" id="first_name"
                                                        placeholder="First Name *" name="first_name"
                                                        value="{{ $data->first_name }}">
                                                        <div class="invalid-feedback first_name" role="alert"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="last_name">Last Name</label>
                                                    <input type="text" class="form-control" id="last_name"
                                                        placeholder="Last Name *" name="last_name"
                                                        value="{{ $data->last_name }}">
                                                        <div class="invalid-feedback last_name" role="alert"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" id="email"
                                                        placeholder="Email *" name="email" value="{{ $data->email }}">
                                                        <div class="invalid-feedback email" role="alert"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" class="form-control" id="phone"
                                                        placeholder="Phone *" name="phone"
                                                        value="{{ $data->mobile }}">
                                                        <div class="invalid-feedback phone" role="alert"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" id="address"
                                                        placeholder="Address *" name="address" value="{{ $data->address }}">
                                                        <div class="invalid-feedback address" role="alert"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <div class="profile-image">
                                                    <div class="img-uploader-content">
                                                        <label for="upload_certificate">Upload vcertificate of
                                                            Incoorparation</label>
                                                        <input type="file" class="form-control" name="upload_certificate"
                                                            accept="image/png, image/jpeg, image/gif" />
                                                            <div class="invalid-feedback upload_certificate" role="alert"></div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="avatar me-2">
                                                            <a href="{{ asset('images/vcertificate/' . $data->vcertificate) }}"
                                                                download><img alt="avatar"
                                                                    src="{{ asset('images/vcertificate') . '/' . $data->vcertificate }}" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile-image">
                                                    <div class="img-uploader-content">
                                                        <label for="upload_passport">Upload passport</label>
                                                        <input type="file" class="form-control" name="upload_passport"
                                                            accept="image/png, image/jpeg, image/gif" />
                                                            <div class="invalid-feedback upload_passport" role="alert"></div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="avatar me-2">
                                                            <a href="{{ asset('images/userpassport/' . $data->passport) }}"
                                                                download><img alt="avatar"
                                                                    src="{{ asset('images/userpassport') . '/' . $data->passport }}" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="is_veried_vcertificate">Vcertificate of Incoorparation
                                                        Verification status</label>
                                                    <select class="form-control" id="is_veried_vcertificate"
                                                        name="is_veried_vcertificate">
                                                        <option value="0"
                                                            {{ isset($data->is_veried_vcertificate) && $data->is_veried_vcertificate == 0 ? 'selected' : '' }}>
                                                            Pending</option>
                                                        <option value="1"
                                                            {{ isset($data->is_veried_vcertificate) && $data->is_veried_vcertificate == 1 ? 'selected' : '' }}>
                                                            Approved</option>
                                                        <option value="2"
                                                            {{ isset($data->is_veried_vcertificate) && $data->is_veried_vcertificate == 2 ? 'selected' : '' }}>
                                                            Rejected</option>
                                                    </select>
                                                    <div class="invalid-feedback is_veried_vcertificate" role="alert"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-sm-12">
                                                    <label for="is_veried_passport">Passport Verification status</label>
                                                    <select class="form-control" id="is_veried_passport"
                                                        name="is_veried_passport">
                                                        <option value="0"
                                                            {{ isset($data->is_veried_passport) && $data->is_veried_passport == 0 ? 'selected' : '' }}>
                                                            Pending</option>
                                                        <option value="1"
                                                            {{ isset($data->is_veried_passport) && $data->is_veried_passport == 1 ? 'selected' : '' }}>
                                                            Approved</option>
                                                        <option value="2"
                                                            {{ isset($data->is_veried_passport) && $data->is_veried_passport == 2 ? 'selected' : '' }}>
                                                            Rejected</option>
                                                    </select>
                                                    <div class="invalid-feedback is_veried_passport" role="alert"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <div class="col-sm-12">
                                                    <label for="comment">Comment</label>
                                                    <input type="text" class="form-control" id="comment"
                                                        placeholder="Comment *" name="comment"
                                                        value="{{ $data->comment }}">
                                                        <div class="invalid-feedback comment" role="alert"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-process" data-btn-process="Save Changes">Save Changes</button>
                                        <a href="{{ url('/admin/users') }}" class="btn badge-danger pt-2">Cancel</a>
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
        $('#verify_users').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('admin.user.update') }}",
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
                    location.href = "{{url('/admin/users')}}" 
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
