@extends('front.layouts.master')
@section('section')
 <section class="page-title page-title-layout2 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="{{url('/front/images/page-titles/12.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading mb-0">Our Services</h1>
            <a href="#careers" class="scroll-down">
              <i class="icon-arrow-down"></i>
            </a>
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
                  <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
              </nav>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.breadcrumb-wrapper -->
    </section><!-- /.page-title -->

    <!-- ========================
        Services Layout 1
    =========================== -->
    <section class="services-layout1 pt-120 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h2 class="heading__subtitle">Fostering the Growth of Solar Energy Market</h2>
              <h3 class="heading__title">A Leading Supplier Of Solar Materials For Manufacturers, Installers &
                Contractors.</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- service item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="{{url('/front/images/services/1.jpg')}}" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Solar Panels</h4>
                <p class="service__desc">A PV module is an assembly of photo voltaic cells mounted in a framework for
                  installation cells use sunlight as a source </p>
                <a href="services-single-service.html" class="btn btn__secondary btn__outlined btn__custom">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="{{url('/front/images/services/2.jpg')}}" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Wind Turbines</h4>
                <p class="service__desc">The smallest turbines used for applications such as battery charging for cells
                  mounted in a framework auxiliary.</p>
                <a href="services-single-service.html" class="btn btn__secondary btn__outlined btn__custom">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="{{url('/front/images/services/3.jpg')}}" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Hydropower Plants</h4>
                <p class="service__desc">Hydroelectric power plants can include a reservoir to exploit the energy of
                  falling water by the smallest turbines.</p>
                <a href="services-single-service.html" class="btn btn__secondary btn__outlined btn__custom">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="{{url('/front/images/services/4.jpg')}}" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Fossil Resources</h4>
                <p class="service__desc">Green chemistry is attracting interest as it provides clean and green
                  technologies with used for applications.</p>
                <a href="services-single-service.html" class="btn btn__secondary btn__outlined btn__custom">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #5 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="{{url('/front/images/services/5.jpg')}}" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Battery Materials</h4>
                <p class="service__desc">Lithium batteries have become the battery type of choice in most applications
                  due to the high energy </p>
                <a href="services-single-service.html" class="btn btn__secondary btn__outlined btn__custom">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #6 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__img">
                <img src="{{url('/front/images/services/6.jpg')}}" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Charge Controllers</h4>
                <p class="service__desc">Charge controllers regulate the rate of charge from your inverter to your
                  battery bank just browse our controllers.</p>
                <a href="services-single-service.html" class="btn btn__secondary btn__outlined btn__custom">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

    <!-- =========================== 
      contact layout 3
    ============================= -->
    <section class="contact-layout3 pt-130 pb-0">
      <div class="bg-img"><img src="{{url('/front/images/backgrounds/4.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="contact-panel d-block p-0">
          <div class="row row-no-gutter">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <div class="bg-img"><img src="{{url('/front/images/banners/6.jpg')}}" alt="background"></div>
              <div class="contact-panel__banner d-flex flex-column justify-content-between h-100">
                <div class="testimonials-wrapper testimonials-light mb-50">
                  <strong class="d-block color-white mb-30">Satisfied Users Over The Globe!</strong>
                  <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": false, "dots": false}'>
                    <!-- Testimonial #1 -->
                    <div class="testimonial-item">
                      <h4 class="testimonial__desc">They were fantastic through the entire purchase process. I had
                        lots
                        of
                        questions and they were patient. My system arrived it was well packed and shipping with xpo.
                      </h4>
                      <div class="testimonial__meta d-flex flex-wrap align-items-center">
                        <div class="testimonial__thumb">
                          <img src="{{url('/front/images/testimonials/thumbs/1.png')}}" alt="thumb">
                        </div><!-- /.testimonial__thumb -->
                        <div>
                          <h4 class="testimonial__meta-title">Ahmed Abdallah</h4>
                          <p class="testimonial__meta-desc">Front End Developer</p>
                        </div>
                      </div><!-- /.testimonial-meta -->
                    </div><!-- /. testimonial-item -->
                    <!-- Testimonial #2 -->
                    <div class="testimonial-item">
                      <h4 class="testimonial__desc">They helped lead me through the process of system selection, site
                        layout
                        and placing my order. They were very knowledgeable and has provided guidance each step.
                      </h4>
                      <div class="testimonial__meta d-flex flex-wrap align-items-center">
                        <div class="testimonial__thumb">
                          <img src="{{url('/front/images/testimonials/thumbs/2.png')}}" alt="thumb">
                        </div><!-- /.testimonial__thumb -->
                        <div>
                          <h4 class="testimonial__meta-title">John Peter</h4>
                          <p class="testimonial__meta-desc">pro systems</p>
                        </div>
                      </div><!-- /.testimonial-meta -->
                    </div><!-- /. testimonial-item -->
                  </div><!-- /.carousel -->
                </div><!-- /.testimonials-wrapper -->
                <div class="clients-wrapper clients-light">
                  <strong class="d-block color-white mb-30">Our Trusted Clients</strong>
                  <div class="slick-carousel"
                    data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                    <div class="client">
                      <a href="#"><img src="{{url('/front/images/clients/1.png')}}" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                      <a href="#"><img src="{{url('/front/images/clients/2.png')}}" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                      <a href="#"><img src="{{url('/front/images/clients/3.png')}}" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                      <a href="#"><img src="{{url('/front/images/clients/4.png')}}" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                      <a href="#"><img src="{{url('/front/images/clients/5.png')}}" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                      <a href="#"><img src="{{url('/front/images/clients/6.png')}}" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                      <a href="#"><img src="{{url('/front/images/clients/3.png')}}" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                      <a href="#"><img src="{{url('/front/images/clients/4.png')}}" alt="client"></a>
                    </div><!-- /.client -->
                  </div><!-- /.carousel -->
                </div><!-- /.clients-wrapper -->
              </div>
            </div><!-- /.col-xl-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
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
                    <button type="submit" class="btn btn__primary btn__block">
                      <i class="icon-arrow-right"></i> <span>Submit Request</span>
                    </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.contact-panel -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <p class="text__link text-center color-white mt-40 mb-40">Receive an accurate quote within 3-5 days when you
              fill out the form on this page. Or, give us a call:
              <a href="#" class="color-heading">
                (002) 01061245741
              </a>
            </p>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 3 -->

    <!-- ======================
    Features Layout 2
    ========================= -->
    <section class="features-layout2 pt-120 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h2 class="heading__subtitle color-primary">Making Tomorrow Different Today.</h2>
            <h3 class="heading__title">Energize Society With Sustainable And Reliable Energy Systems!</h3>
            <p class="heading__desc mb-20">In recent years, new capacity across the solar value chain has
              become
              necessary to support the PV market’s growth. However, the capital required to establish and scale-up
              wafer, solar cell and solar module manufacturing facilities is considerable. </p>
            <a href="#" class="btn btn__primary btn__outlined btn__custom mb-40">
              <i class="icon-arrow-right"></i>
              <span>Explore All Features!</span>
            </a>
          </div><!-- /col-lg-5 -->

          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <div class="row">
              <!-- Feature item #1 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-hydro-power3"></i>
                  </div>
                  <h4 class="feature__title">Save Your Money</h4>
                  <p class="feature__desc">Save money on utilities or increase the value of your home by installing
                    solar
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #2 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-biosphere"></i>
                  </div>
                  <h4 class="feature__title">5Stars Customer Service</h4>
                  <p class="feature__desc">Understand that we must go above our customer expectations during each
                    interaction always.
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #3 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-eco-house"></i>
                  </div>
                  <h4 class="feature__title">Your Home Is Energy</h4>
                  <p class="feature__desc">Everyday the sun provides us with abundance of free energy by placing solar
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #4 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-energy2"></i>
                  </div>
                  <h4 class="feature__title">Consult & Planning</h4>
                  <p class="feature__desc">Our remote industrial solar systems are designed to reliably power our
                    clients
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #5 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-electric-car"></i>
                  </div>
                  <h4 class="feature__title">Certified Engineers</h4>
                  <p class="feature__desc">Our sales engineers on our staff have experience and can design any complete
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #6 -->
              <div class="col-sm-6">
                <div class="feature-item feature-item-custom">
                  <div class="feature__icon">
                    <i class="icon-wind-socket"></i>
                  </div>
                  <h4 class="feature__title">Awards & <br> Milestones</h4>
                  <p class="feature__desc">Benefiting from nearly 20 years experience.</p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features Layout 2 -->
    @endsection