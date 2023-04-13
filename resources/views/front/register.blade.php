@extends('front.layouts.master')
@section('section')


<!-- =========================== 
      contact layout 2
    ============================= -->
<section id="contact" class="contact-layout2 pt-130 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1">
                <div class="contact-panel mb-0">
                    <form class="contact-panel__form" method="post" action="{{route('store.user')}}" id="registerForm"
                    enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <h4 class="contact-panel__title">Registration</h4>
                            </div> <!-- /.col-lg-12 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name" id="first_name"
                                        name="first_name">
                                        @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                              
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name" id="last_name"
                                        name="last_name">
                                        @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" id="email"
                                        name="email">
                                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone" id="phone"
                                        name="phone">
                                        @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address" id="address"
                                        name="address">
                                        @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" id="password"
                                        name="password">
                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-6">
                                <div class="form-group mb-4 mt-3">
                                    <label for="upload_vcertificate">Upload vcertificate of Incoorparation</label>
                                    <input type="file" class="form-control-file" id="upload-certificate" name="upload_certificate">
                                </div>
                                @error('upload_vcertificate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div><!-- /.col-sm-6 -->
                            <div class="col-6">
                                <div class="form-group mb-4 mt-3">
                                    <label for="exampleFormControlFile1">Upload passport</label>
                                    <input type="file" class="form-control-file" id="upload-passport" name="upload_passport">
                                </div>
                                @error('upload_passport')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div><!-- /.col-sm-6 -->
                            <div class="col-12">
                                <button type="submit" class="btn btn__primary btn__block">
                                    <i class="icon-arrow-right"></i> <span>Register</span>
                                </button>
                                <div class="contact-result"></div>
                            </div><!-- /.col-12 -->
                        </div><!-- /.row -->
                    </form>
                    {!! $validater->selector('#registerForm') !!}
                </div>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact layout 2 -->
@endsection