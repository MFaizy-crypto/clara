<div class="modal-dialog project-stories-modal modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="formModal">
                Registrierung als Energyscout
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body py-3">
            <form method="POST" class="needs-validation user-register-form" novalidate="" autocomplete="off" enctype="multipart/form-data">@csrf
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="first_name">Vorname</label>
                                <input type="text" class="form-control" placeholder="Vorname" id="first_name" name="first_name">
                                <div class="invalid-feedback first_name" role="alert"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="last_name">Nachname</label>
                                <input type="text" class="form-control" placeholder="Nachname" id="last_name" name="last_name">
                                <div class="invalid-feedback last_name" role="alert"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="E-mail" id="email" name="email">
                                <div class="invalid-feedback email" role="alert"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Telefon</label>
                                <input type="text" class="form-control" placeholder="Telefon" id="phone" name="phone">
                                <div class="invalid-feedback phone" role="alert"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address">Adresse</label>
                                <input type="text" class="form-control" placeholder="Addresse" id="address" name="address">
                                <div class="invalid-feedback address" role="alert"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password">Passwort</label>
                                <input type="password" class="form-control" placeholder="Passwort" id="password" name="password">
                                <div class="invalid-feedback password" role="alert"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-4 mt-3">
                                <label for="upload_vcertificate">Gewerbenachweis</label>
                                <input type="file" class="form-control-file" id="upload-certificate" name="upload_certificate">
                            </div>
                            <div class="invalid-feedback upload_certificate" role="alert"></div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-4 mt-3">
                                <label for="exampleFormControlFile1">Ausweisdokument</label>
                                <input type="file" class="form-control-file" id="upload-passport" name="upload_passport">
                            </div>
                            <div class="invalid-feedback upload_passport" role="alert"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn__primary btn__block mb-3 mt-2"><i class="icon-arrow-right"></i> <span class="btn-process" data-btn-process="Register">Registrieren</span></button>
                    <a href="javascript:void(0);" onclick="popup(this);" data-method="get" data-url="{{ route('view.front.login') }}" class="btn btn__dark btn__link btn__block"><i class="icon-arrow-right"></i><span>Bereits registriert? Zum einloggen hier klicken!</span></a>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.user-register-form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: "{{ route('store.user') }}",
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