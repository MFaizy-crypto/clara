@extends('front.layouts.master')
@section('section')
 <section class="page-title page-title-layout2 bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="{{url('/front/images/page-titles/13.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <h1 class="pagetitle__heading mb-0">Wind Turbines </h1>
            <p class="pagetitle__desc">The smallest turbines used for applications such as battery charging for cells
              mounted in a framework auxiliary power.</p>
            <div class="d-flex align-items-center mt-30">
              <a href="request-quote.html" class="btn btn__primary mr-30">
                <i class="icon-arrow-right"></i> <span>Request a quote</span>
              </a>
              <a href="about-us.html" class="btn btn__white">more about us</a>
            </div>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="breadcrumb-wrapper bg-white">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Wind Turbines</li>
                </ol>
              </nav>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.breadcrumb-wrapper -->
    </section><!-- /.page-title -->

    <!-- ======================
      Text Content Section
    ========================= -->
    <section class="text-content-section pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-right mb-30">
              <div class="widget widget-categories">
                <h5 class="widget__title">Services</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                    <li>
                      <a href="#" class="active"><i class="icon-arrow-right"></i><span>Architecture &
                          building</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-right"></i><span>Construction Consultants</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-right"></i><span>Construction Management</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-right"></i><span>Tiling And Painting</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-right"></i><span>Planning And Scheduling</span></a>
                    </li>
                    <li>
                      <a href="#"><i class="icon-arrow-right"></i><span>Design Build Contracts</span></a>
                    </li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
              <div class="widget widget-help bg-overlay bg-overlay-primary">
                <div class="bg-img"><img src="{{url('/front/images/banners/7.jpg')}}" alt="banner"></div>
                <div class="widget__content">
                  <h5 class="widget__title">Dedicated Customer Teams & Agile Services</h5>
                  <p class="widget__desc mb-30">Our worldwide presence ensures the timeliness, cost efficiency
                    compliance
                    adherence required to ensure your production timelines are met.
                  </p>
                  <a href="request-quote.html" class="btn btn__white btn__outlined btn__block mb-30">
                    Schedule An Appointment
                  </a>
                  <div class="contact__number d-none d-xl-flex align-items-center">
                    <i class="icon-phone"></i>
                    <a href="tel:5565454117">55 654 541 17</a>
                  </div>
                </div><!-- /.widget-download -->
              </div><!-- /.widget-help -->
              <div class="widget widget-download">
                <h5 class="widget__title">Download</h5>
                <div class="widget__content">
                  <a href="#" class="btn btn__primary btn__block mb-20">
                    <span>Company Report 2020</span>
                    <img src="{{url('/front/images/icons/pdf.png')}}" alt="pdf">
                  </a>
                  <a href="#" class="btn btn__secondary btn__block btn__hover3">
                    <span>Company Brochure</span>
                    <img src="{{url('/front/images/icons/pdf.png')}}" alt="pdf">
                  </a>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-download -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="text__block mb-30">
              <h5 class="text__block-title">Overview</h5>
              <p class="text__block-desc">Wind turbines are manufactured in a wide range of vertical and horizontal
                axis. The smallest turbines are used for applications such as battery charging for auxiliary power for
                boats or caravans or to power traffic warning signs. Larger turbines can be used for making
                contributions to a domestic power supply while selling unused power back to the utility supplier via the
                electrical grid. Arrays of large turbines, known as wind farms, are becoming an increasingly important
                source of intermittent renewable energy and are used by many countries as part of a strategy to reduce
                their reliance on fossil fuels. </p>
              <p class="text__block-desc">One assessment claimed that, as of 2009, wind had the "lowest relative
                greenhouse gas emissions, the least water consumption demands and... the most favourable social impacts"
                compared to photovoltaic, hydro, geothermal, coal and gas.</p>
            </div><!-- /.text-block -->

            <div class="row">
              <!-- gallery item #1 -->
              <div class="col-sm-6">
                <div class="gallery-item">
                  <a class="popup-gallery-item" href="{{url('/front/images/gallery/4.jpg')}}">
                    <img src="{{url('/front/images/gallery/4.jpg')}}" alt="gallery img">
                  </a>
                </div><!-- /.gallery-item -->
              </div><!-- /.col-sm-6 -->
              <!-- gallery item #2 -->
              <div class="col-sm-6">
                <div class="gallery-item">
                  <a class="popup-gallery-item" href="{{url('/front/images/gallery/5.jpg')}}">
                    <img src="{{url('/front/images/gallery/5.jpg')}}" alt="gallery img">
                  </a>
                </div><!-- /.gallery-item -->
              </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->

            <div class="row">
              <div class="col-12">
                <h5 class="fz-25">Stats & Charts</h5>
              </div>
              <!-- gallery item #1 -->
              <div class="col-sm-6">
                <p class="text__block-desc">Our mix of company-owned and contractor assets allows us to retain optimal
                  levels of control whilst expanding our reach to over 96% of towns in Australia. With 40 years of LTL
                  experience, we are now a trusted LTL freight provider for shippers of all sizes and commodity types.
                </p>
                <p class="text__block-desc">Our LTL service extends to all states and territories, and includes multiple
                  per-week services to places many others only serve occasionally, including Darwin, Alice Springs,
                  Newman, Mt. Isa, Launceston and Burnie.
                </p>
                <p class="text__block-desc">We pride ourselves on providing the best transport and shipping services
                  currently available in Australia. Our skilled personnel, utilising the latest communications, tracking
                  and processing software, combined with decades of experience, ensure all freight is are shipped,
                  trans-shipped and delivered as safely
                </p>
              </div><!-- /.col-sm-6 -->
              <!-- gallery item #2 -->
              <div class="col-sm-6">
                <img src="{{url('/front/images/charts/1.png')}}" alt="chart" class="mb-40">
              </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
            <div class="text__block mb-30">
              <h5 class="text__block-title">How It Works?!</h5>
              <p class="text__block-desc">It has been argued that expanding use of wind power will lead to increasing
                geopolitical competition over critical materials for wind turbines such as rare earth elements
                neodymium, praseodymium, and dysprosium. But this perspective has been criticised for failing to
                recognise that most wind turbines.</p>
            </div>
            <div class="video-banner mb-70">
              <img src="{{url('/front/images/banners/8.jpg')}}" alt="banner">
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
              </a>
              <!-- <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
              </a> -->
            </div><!-- /.video-banner -->
  
            </div><!-- /.row -->

            <h5 class="fz-25 mt-20">Key Benifits</h5>
            <div id="accordion" class="mb-60">          <div class="text__block mb-30">
              <h5 class="text__block-title">Why Us!</h5>
              <p class="text__block-desc">Despite these diverse developments, developments in fossil fuel systems almost
                entirely eliminated any wind turbine systems larger than supermicro size. In the early 1970s, however,
                anti-nuclear protests in Denmark spurred artisan mechanics to develop microturbines of 22 kW. </p>
            </div>
            <div class="row features-layout3">
              <!-- Feature item #1 -->
              <div class="col-sm-4">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-hydro-power3"></i>
                  </div>
                  <h4 class="feature__title">Save Your Money</h4>
                  <p class="feature__desc">Save money on utilities or increase the value of your home by installing
                    solar
                  </p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-4 -->
              <!-- Feature item #2 -->
              <div class="col-sm-4">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-biosphere"></i>
                  </div>
                  <h4 class="feature__title">Consult & Planning</h4>
                  <p class="feature__desc">Everyday the sun provides us with abundance of free energy by placing solar
                  </p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-4 -->
              <!-- Feature item #3 -->
              <div class="col-sm-4">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-eco-house"></i>
                  </div>
                  <h4 class="feature__title">Your Home Is Energy</h4>
                  <p class="feature__desc">Everyday the sun provides us with abundance of free energy by placing solar
                  </p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-4 -->
              <div class="accordion-item">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse1">
                  <a class="accordion-item__title" href="#">Which Plan Is Right For Me?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse1" class="collapse" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse2">
                  <a class="accordion-item__title" href="#">Do I have to commit to a contract?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse2" class="collapse" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item opened">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse3">
                  <a class="accordion-item__title" href="#">What Payment Methods Are Available?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse3" class="collapse show" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
            </div><!-- /.accordion -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content Section -->

    <!-- =========================== 
      contact layout 2
    ============================= -->
    <section class="contact-layout2 pb-0 bg-overlay bg-overlay-primary-gradient">
      <div class="bg-img"><img src="{{url('/front/images/banners/2.jpg')}}" alt=""></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="col-inner">
              <div class="heading-layout2 heading-light mb-60">
                <h2 class="heading__subtitle">Save Money, Save The Environment!</h2>
                <h3 class="heading__title">Providing Value To Our ClientsThrough Ongoing Product & Innovation.
                </h3>
                <p class="heading__desc">Our Solar business now provides the preferred channel to market for some of the
                  world’s leading PV manufacturers and our solar professionals work jointly with partners on enhancing
                  product features, lowering lead times and improving cash flow.
                </p>
              </div><!-- /.heading -->
              <div class="row fancybox-light">
                <!-- fancybox item #1 -->
                <div class="col-sm-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-biosphere2"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title mb-0">Environmental Sensitivity</h4>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-sm-4 -->
                <!-- fancybox item #2 -->
                <div class="col-sm-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-tube"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title mb-0">Personalised Solutions</h4>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-sm-4 -->
                <!-- fancybox item #3 -->
                <div class="col-sm-4">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-electric-charge"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title mb-0">Performance Measures</h4>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-sm-4 -->
              </div><!-- /.row -->
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="contact-panel">
              <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm"
                novalidate="novalidate">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <h4 class="contact-panel__title">Request A Quote</h4>
                  </div> <!-- /.col-lg-12 -->
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                        required>
                    </div>
                  </div><!-- /.col-sm-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="contact-email" required>
                    </div>
                  </div><!-- /.col-sm-6 -->
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                        name="contact-phone">
                    </div>
                  </div><!-- /.col-sm-6 -->
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Address" id="contact-address"
                        name="contact-address" required>
                    </div>
                  </div><!-- /.col-sm-6 -->
                  <div class="col-12">
                    <span class="font-weight-bold color-heading d-block mb-15 mt-10">System Data</span>
                  </div><!-- /.col-12 -->
                  <div class="col-sm-6">
                    <div class="form-group">
                      <select class="form-control">
                        <option value="0">System Installer?</option>
                        <option value="1">System Installer 1</option>
                        <option value="1">System Installer 2</option>
                      </select>
                    </div>
                  </div><!-- /.col-sm-6 -->
                  <div class="col-sm-6">
                    <div class="form-group">
                      <select class="form-control">
                        <option value="0">System Installer?</option>
                        <option value="1">System Installer 1</option>
                        <option value="1">System Installer 2</option>
                      </select>
                    </div>
                  </div><!-- /.col-sm-6 -->
                  <div class="col-sm-6">
                    <div class="form-group">
                      <select class="form-control">
                        <option value="0">Monthly electric usage ?</option>
                        <option value="1">100</option>
                        <option value="2">200</option>
                      </select>
                    </div>
                  </div><!-- /.col-sm-6 -->
                  <div class="col-sm-6">
                    <div class="form-group">
                      <select class="form-control">
                        <option value="0">Solar system type?</option>
                        <option value="1">Solar system 1</option>
                        <option value="2">Solar system 2</option>
                      </select>
                    </div>
                  </div><!-- /.col-sm-6 -->
                  <div class="col-sm-6">
                    <div class="form-group">
                      <select class="form-control">
                        <option value="0">Solar panels place?</option>
                        <option value="1">Solar panels 1</option>
                        <option value="2">Solar panels 2</option>
                      </select>
                    </div>
                  </div><!-- /.col-sm-6 -->
                  <div class="col-sm-6">
                    <div class="form-group">
                      <select class="form-control">
                        <option value="0">Materials on your roof?</option>
                        <option value="1">Materials 1</option>
                        <option value="2">Materials 2</option>
                      </select>
                    </div>
                  </div><!-- /.col-sm-6 -->
                  <div class="col-12">
                    <span class="font-weight-bold color-heading d-block mb-15 mt-10">Preferred Contact Method</span>
                    <div class="d-flex">
                      <div class="form-group input-radio mr-30">
                        <label class="label-radio">All
                          <input type="radio" name="contact" checked>
                          <span class="radio-indicator"></span>
                        </label>
                      </div><!-- /.input-radio -->
                      <div class="form-group input-radio mr-30">
                        <label class="label-radio">Email
                          <input type="radio" name="contact">
                          <span class="radio-indicator"></span>
                        </label>
                      </div><!-- /.input-radio -->
                      <div class="form-group input-radio">
                        <label class="label-radio">Phone
                          <input type="radio" name="contact">
                          <span class="radio-indicator"></span>
                        </label>
                      </div><!-- /.input-radio -->
                    </div>
                    <button type="submit" class="btn btn__secondary btn__block">
                      <i class="icon-arrow-right"></i> <span>Submit Request</span>
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