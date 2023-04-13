<div class="modal-dialog project-stories-modal modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="formModal">
                User Profile
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body py-3">
            <form method="POST" class="needs-validation user-update-form" novalidate="" autocomplete="off" enctype="multipart/form-data">@csrf
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name" value="{{ isset(auth()->user()->first_name) && auth()->user()->first_name != "" ? auth()->user()->first_name : "" }}">
                                <div class="invalid-feedback first_name" role="alert"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name" value="{{ isset(auth()->user()->last_name) && auth()->user()->last_name != "" ? auth()->user()->last_name : "" }}">
                                <div class="invalid-feedback last_name" role="alert"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{ isset(auth()->user()->email) && auth()->user()->email != "" ? auth()->user()->email : "" }}">
                                <div class="invalid-feedback email" role="alert"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone" value="{{ isset(auth()->user()->mobile) && auth()->user()->mobile != "" ? auth()->user()->mobile : "" }}">
                                <div class="invalid-feedback phone" role="alert"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" placeholder="Address" id="address" name="address" value="{{ isset(auth()->user()->address) && auth()->user()->address != "" ? auth()->user()->address : "" }}">
                                <div class="invalid-feedback address" role="alert"></div>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-4 mt-3">
                                <label for="upload_vcertificate">Vcertificate of Incoorparation</label> <a href="{{ asset('images/vcertificate/'.auth()->user()->vcertificate) }}" download><span class="font-weight-bold float-right @if(isset(auth()->user()->is_veried_vcertificate) && auth()->user()->is_veried_vcertificate == 1) text-success @elseif(isset(auth()->user()->is_veried_vcertificate) && auth()->user()->is_veried_vcertificate == 2) text-danger @else text-warning @endif">@if(isset(auth()->user()->is_veried_vcertificate) && auth()->user()->is_veried_vcertificate == 1) Approved @elseif(isset(auth()->user()->is_veried_vcertificate) && auth()->user()->is_veried_vcertificate == 2) Rejected @else Pending for verification @endif</span></a>
                                <input type="file" class="form-control-file" id="upload-certificate" name="upload_certificate">
                            </div>
                            <div class="invalid-feedback upload-certificate" role="alert"></div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-4 mt-3">
                                <label for="exampleFormControlFile1">Passport</label> <a href="{{ asset('images/userpassport/'.auth()->user()->passport) }}" download><span class="font-weight-bold float-right @if(isset(auth()->user()->is_veried_passport) && auth()->user()->is_veried_passport == 1) text-success @elseif( isset(auth()->user()->is_veried_passport) && auth()->user()->is_veried_passport == 2)) text-danger @else text-warning @endif">@if(isset(auth()->user()->is_veried_passport) && auth()->user()->is_veried_passport == 1) Approved @elseif(isset(auth()->user()->is_veried_passport) && auth()->user()->is_veried_passport == 2) Rejected @else Pending for verification @endif</span></a>
                                <input type="file" class="form-control-file" id="upload-passport" name="upload_passport">
                            </div>
                            <div class="invalid-feedback upload-passport" role="alert"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn__primary btn__block mb-3"><i class="icon-arrow-right"></i> <span class="btn-process" data-btn-process="Update Profile">Update Profile</span></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.user-update-form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: "{{ route('update.user') }}",
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
                alert(data.message);
                $('#popup').modal('hide');
                location.reload();
            },
            error: function(data) {
                if ($('.invalid-feedback').length > 0) {
                    $('.invalid-feedback').html('');
                }
                $('.btn-process').attr("disabled", false).html($('.btn-process').data('btn-process'));
                if ($('.invalid-feedback strong').length > 0) {}
                var errObj = jQuery.parseJSON(data.responseText);
                $.each(errObj.errors, function(key, value) {
                    $("." + key).html('<strong>' + value + '</strong>').fadeIn();
                });
            },
            complete: function() {
                $('.btn-process').attr("disabled", false).html($('.btn-process').data('btn-process'));
            }
        });
    });
</script>