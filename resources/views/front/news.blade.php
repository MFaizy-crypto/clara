@extends('front.layouts.master')
@section('section')
<style>
    .custom_pagination {
        text-align: center;
    }
    .custom_pagination svg {
        max-width: 20px;
    }
    .custom_pagination nav .flex.justify-between.flex-1.sm\:hidden {
        display: none;
    }
    .custom_pagination span.relative.z-0.inline-flex.shadow-sm.rounded-md {
        min-width: 210px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        box-shadow: none !important;
    }
    .custom_pagination span.relative.z-0.inline-flex.shadow-sm.rounded-md span, .custom_pagination span.relative.z-0.inline-flex.shadow-sm.rounded-md a {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        border-color: #d5d6d6 !important;
    }
</style>
<section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="{{url('/front/images/page-titles/11.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">News</li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading mb-0">Neuigkeiten</h1>
            <a href="#careers" class="scroll-down">
              <i class="icon-arrow-down"></i>
            </a>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="post-grid">
      <div class="container">
        <div class="row">
          <!-- Post Item #1 -->
          <?php if(!empty($list)){ 
            foreach ($list as $key => $value) { ?>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="{{url('/blog-single-post/'.$value->id)}}">
                  <img src="{{url('/img/news-articles').'/'.$value->image}}" alt="post image" loading="lazy" style="width:370px;height:253px;">
                </a>
                <span class="post__date">{{date('M d, Y',strtotime($value->created_at))}}</span>
              </div><!-- /.post-img -->
              <div class="post__body">
                <div class="post__meta d-flex align-items-center">
                  <!-- <div class="post__cat">
                    <a href="#">Oil & Gas</a><a href="#">Insights</a>
                  </div> --><!-- /.post-meta-cat -->
                 <!--  <a class="post__author" href="#">Mike Dooley</a> -->
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="{{url('/blog-single-post/'.$value->id)}}">{{ $value->title}}
                  </a></h4>
                <p class="post__desc">{!! substr($value->description, 0, 350) . '...'; !!}
                </p>
                <a href="{{url('/blog-single-post/'.$value->id)}}" class="btn btn__secondary btn__outlined btn__custom">
                  <i class="icon-arrow-right"></i>
                  <span>Weiterlesen</span>
                </a>
              </div><!-- /.post-content -->
            </div><!-- /.post-item -->
          </div>
          <?php } } ?>
          <!-- /.col-lg-4 -->
          <!-- Post Item #2 -->
          
        </div><!-- /.row -->
        <div class="custom_pagination">
        {!! $list->appends(\Request::except('page'))->render() !!}
    </div>
        <!-- <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <nav class="pagination-area">
              <ul class="pagination justify-content-center">
                <li><a class="current" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#"><i class="icon-arrow-right"></i></a></li>
              </ul>
            </nav><!-- .pagination-area -->
          </div><!-- /.col-lg-12 -->
        </div> --><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->
    @endsection