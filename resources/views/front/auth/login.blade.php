<div class="modal-dialog project-stories-modal modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="formModal">
                Login
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body py-3">
            <form method="POST" class="needs-validation user-register-form" novalidate="" autocomplete="off">@csrf
                <div class="card-body p-0">
                    <div class="col-sm-12 col-md-6 col-lg-12">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" placeholder="E-mail" id="email" name="email">
                            <div class="invalid-feedback email" role="alert"></div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="password">Passwort</label>
                            <input type="password" class="form-control" placeholder="Passwort" id="password" name="password">
                            <div class="invalid-feedback password" role="alert"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn__primary btn__block mb-3"><i class="icon-arrow-right"></i> <span class="btn-process" data-btn-process="Login">Login</span></button>
                    <a href="javascript:void(0);" onclick="popup(this);" data-method="get" data-url="{{ route('view.front.register') }}" class="btn btn__dark btn__link btn__block"><i class="icon-arrow-right"></i><span>Noch keine Zugangsdaten? Als Energyscout registrieren</span></a>
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
            url: "{{ route('login') }}",
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