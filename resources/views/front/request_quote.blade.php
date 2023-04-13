@extends('front.layouts.master')
@section('section')
  <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="{{url('/front/images/page-titles/14.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading mb-0">Kontakt aufnehmen</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kontakt aufnehmen</li>
              </ol>
            </nav>
            <a href="#contact" class="scroll-down">
              <i class="icon-arrow-down"></i>
            </a>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->


    <!-- =========================== 
      contact layout 2
    ============================= -->
    <section id="contact" class="contact-layout2 pt-130 pb-110">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <div class="heading mb-40 pb-30 border-bottom">
              <h2 class="heading__subtitle">Lassen Sie sich von uns individuell beraten.</h2>
              <h3 class="heading__title">Ihr direkter Draht zur Double EE Gruppe</h3>
              <p class="heading__desc">Füllen Sie einfach unser Anfrageformular aus. wir melden uns schnellstmöglich bei Ihnen. 
              </p>
            </div><!-- /.heading -->
            <h5>Oder Sie rufen uns direkt an:</h5>
            <div class="contact__number d-none d-xl-flex align-items-center mb-30">
              <i class="icon-phone"></i>
              <a href="tel:+41792665260" class="color-primary">+41 79 266 52 60</a>
            </div>
            <p>Wir stehen ihnen jederzeit mit Rat und Tat zur Seite. Sie können uns auch eine Email schreiben an: <a href="mailto:info@e2eag.com">info@e2eag.com</a></p>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-1">
            <div class="contact-panel mb-0">
            <form class="contact-panel__form home-lead-form" method="post" action="assets/php/contact.php"
                        id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <h4 class="contact-panel__title">Hier einfach anfragen</h4>
                            </div> <!-- /.col-lg-12 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="name"
                                        name="name" required>
                                        <div class="invalid-feedback name" role="alert"></div>
                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" id="email"
                                        name="email" required>
                                    <div class="invalid-feedback email" role="alert"></div>
									      </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Telefon" id="phone"
                                        name="phone">
                                        <div class="invalid-feedback phone" role="alert"></div>
                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Adresse der Anlage"
                                        id="address" name="address" required>
                                        <div class="invalid-feedback address" role="alert"></div>

                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-12">
                                <span class="font-weight-bold color-heading d-block mb-15 mt-10">Spezifizierung der
                                    Anfrage</span>
                            </div><!-- /.col-12 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="plant_options">
                                        @php
                                        $plant_options = config('constant.plant_options');
                                        @endphp
                                        @if(isset($plant_options) && count($plant_options) > 0)
                                        @foreach ($plant_options as $key => $value)
                                        <option value="{{ isset($key)&& $key != 0 ? $key : " " }}">{{ $value }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                  <div class="invalid-feedback plant_options" role="alert"></div>

                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="type_of_surface">
                                        @php
                                        $type_of_surface = config('constant.type_of_surface');
                                        @endphp
                                        @if(isset($type_of_surface) && count($type_of_surface) > 0)
                                        @foreach ($type_of_surface as $key => $value)
                                        <option value="{{isset($key)&& $key != 0 ? $key : " " }}">{{ $value }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <div class="invalid-feedback type_of_surface" role="alert"></div>
                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="commercial_or_private">
                                        @php
                                        $commercial_or_private = config('constant.commercial_or_private');
                                        @endphp
                                        @if(isset($commercial_or_private) && count($commercial_or_private) > 0)
                                        @foreach ($commercial_or_private as $key => $value)
                                        <option value="{{ isset($key)&& $key != 0 ? $key : " "}}">{{ $value }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <div class="invalid-feedback commercial_or_private" role="alert"></div>
                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="area_size">
                                        @php
                                        $area_size = config('constant.area_size');
                                        @endphp
                                        @if(isset($area_size) && count($area_size) > 0)
                                        @foreach ($area_size as $key => $value)
                                        <option value="{{ isset($key)&& $key != 0 ? $key : " " }}">{{ $value }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <div class="invalid-feedback area_size" role="alert"></div>
                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="promotions">
                                        @php
                                        $promotions = config('constant.promotions');
                                        @endphp
                                        @if(isset($promotions) && count($promotions) > 0)
                                        @foreach ($promotions as $key => $value)
                                        <option value="{{isset($key)&& $key != 0 ? $key : " " }}">{{ $value }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <div class="invalid-feedback promotions" role="alert"></div>
                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="landowner">
                                        @php
                                        $landowner = config('constant.landowner');
                                        @endphp
                                        @if(isset($landowner) && count($landowner) > 0)
                                        @foreach ($landowner as $key => $value)
                                        <option value="{{isset($key)&& $key != 0 ? $key : " " }}">{{ $value }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <div class="invalid-feedback landowner" role="alert"></div>
                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="free_space_designation">
                                        @php
                                        $free_space_designation = config('constant.designation_of_the_free_space');
                                        @endphp
                                        @if(isset($free_space_designation) && count($free_space_designation) > 0)
                                        @foreach ($free_space_designation as $key => $value)
                                        <option value="{{isset($key)&& $key != 0 ? $key : " " }}">{{ $value }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <div class="invalid-feedback free_space_designation" role="alert"></div>
                                </div>
                            </div><!-- /.col-sm-6 -->
                            {{-- <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="owner_of_the_area">
                                        @php
                                        $owner_of_the_area = config('constant.owner_of_the_area');
                                        @endphp
                                        @if(isset($owner_of_the_area) && count($owner_of_the_area) > 0)
                                        @foreach ($owner_of_the_area as $key => $value)
                                        <option value="{{ isset($key)&& $key != 0 ? $key : " "}}">{{ $value }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <div class="invalid-feedback owner_of_the_area" role="alert"></div>
                                </div>
                            </div> --}}
                            <!-- /.col-sm-6 -->
                            <div class="col-12">
                                <span class="font-weight-bold color-heading d-block mb-15 mt-10">Bevorzugte Kontaktzeit
                                    für ein Beratungsgespräch</span>
                                <div class="d-flex">
                                    <div class="form-group input-radio mr-30">
                                        <label class="label-radio">All
                                            <input type="radio" name="contact" value="0" checked>
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- /.input-radio -->
                                    <div class="form-group input-radio mr-30">
                                        <label class="label-radio">Vormittags
                                            <input type="radio" name="contact" value="1">
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- /.input-radio -->
                                    <div class="form-group input-radio">
                                        <label class="label-radio">Nachmittags
                                            <input type="radio" name="contact" value="2">
                                            <span class="radio-indicator"></span>
                                        </label>
                                    </div><!-- /.input-radio -->
                                    <div class="invalid-feedback contact" role="alert"></div>
                                </div>
                                <button type="submit" class="btn btn__secondary btn__block">
                                    <i class="icon-arrow-right"></i>  <span class="btn-process" data-btn-process="Anfrage absenden">Anfrage absenden</span>
                                </button>
                                <div class="contact-result"></div>
                            </div><!-- /.col-12 -->
                        </div><!-- /.row -->
                    </form>
            </div>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->
    @endsection
@section('javascript')
    <script type="text/javascript">
    $('.home-lead-form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: "{{ route('store.home.lead') }}",
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
@endsection