@extends('front.layouts.master')
@section('section')
    <section class="page-title pt-30 pb-30">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav>
              <ol class="breadcrumb justify-content-center mb-20">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$details->title}}</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Single
    ========================= -->
    <section class="blog blog-single pt-0 pb-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="post-item mb-0">
              <div class="post__img">
                <a class="d-block" href="#">
                  <img src="{{url('/img/news-articles').'/'.$details->image}}" alt="post image" class="w-100" style="height:564px;">
                </a>
              </div><!-- /.entry-img -->
              <div class="post__body">
                <div class="post__meta d-flex align-items-center">
                  <!-- <div class="post__cat">
                    <a href="#">Engineering</a><a href="#">Distribution</a>
                  </div> --><!-- /.post-meta-cat -->
                  <span class="post__date">{{date('M d, Y',strtotime($details->created_at))}}</span>
                  <!-- <span class="post__author">By: <a href="#">Ahmed</a></span>
                  <span class="post__comments">Comments:<a href="#"> 2</a></span> -->
                </div><!-- /.post-meta -->
                <h1 class="post__title">{{$details->title}}</h1>
                <div class="post__desc">
                 {!!$details->description!!}
                </div><!-- /.post-desc -->
              </div><!-- /.entry-content -->
            </div><!-- /.post-item -->
            <!-- /.blog-share -->
           <!-- /.blog-tags -->
            
            <!-- /.blog-author  -->
            <!-- /.blog-comments -->
           <!-- /.blog-comments-form -->
          </div><!-- /.col-lg-8 -->
          <!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Single -->
    @endsection