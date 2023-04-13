@extends('front.layouts.master')
@section('section')
<section class="page-title page-title-layout8 pt-40 pb-40">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <nav>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="projects-grid.html">projects</a></li>
                <li class="breadcrumb-item active" aria-current="page">Expanding The Solar Supply Chain...</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
     portfolio single
    ========================= -->
    <section class="portfolio-single py-0">
      <div class="bg-img">
        <img src="{{url('/front/images/portfolio/single/1.jpg')}}" alt="portfolio" class="img-fluid">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="portfolio-item">
              <div class="portfolio__body d-flex">
                <div class="portfolio__icon custom-icon">
                  <i class="icon-solar-panel"></i>
                </div>
                <div>
                  <div class="portfolio__cat">
                    <a href="#">Finance</a><a href="#">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h2 class="portfolio__title">Expanding The Solar Supply Chain Finance Program</h2>
                  <p class="portfolio__desc">We has announced the expansion of its solar supply chain finance (SCF)
                    program for PV module manufacturers...</p>
                  <a href="#" class="btn btn__link btn__primary">
                    <i class="icon-arrow-right"></i>
                    <span>Schedule A Visit</span>
                  </a>
                </div>
              </div><!-- /.portfolio__body -->
            </div><!-- /.portfolio-item  -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio single -->

    <!-- ======================
     Text Content
    ========================= -->
    <section class="pt-150">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <span class="text__block-subtitle">Overview!</span>
            <h5 class="text__block-title">HighEfficiency Solar Cells For PV Manufacturers
            </h5>
          </div>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="text__block-desc">A broad range of solar cells for commercial-scale solar module manufacturing.
              Through our extensive global partner network, we offer a reliable supply of high-quality bifacial, mono
              PERC, mono and multi solar cells to support both short term and long term production requirements.
              Working
              closely with our supply partners and organizations including U.S-based SEIA, we help solar manufacturers
              and PV developers worldwide lower lead times.</p>
            <p class="text__block-desc">Our high-efficiency PV cells are suitable for a broad range of module
              applications including private rooftop installations, commercial and industrial rooftop installations,
              remote power generators and large-scale power plants on the ground and on the water.</p>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
            <p class="text__block-desc">This commitment is reflected in the quality of our solar cells, which have
              been
              designed and manufactured to the highest standards of performance and durability. Our cells are tested
              under the toughest PID-free testing conditions and certified by institutions such as UL and ITRI.</p>
            <a href="request-quote.html" class="btn btn__primary">
              <i class="icon-arrow-right"></i><span>Explore Our Products</span>
            </a>
          </div>
        </div><!-- /.row -->
      </div>
    </section><!-- /.Text Content -->

    <!-- ======================
     Gallery
    ========================= -->
    <section class="py-0">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel carousel-arrows-light"
              data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <a class="popup-gallery-item" href="assets/images/gallery/1.jpg">
                <img src="{{url('/front/images/gallery/1.jpg')}}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/2.jpg">
                <img src="{{url('/front/images/gallery/2.jpg')}}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/3.jpg">
                <img src="{{url('/front/images/gallery/3.jpg')}}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/4.jpg">
                <img src="{{url('/front/images/gallery/4.jpg')}}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/5.jpg">
                <img src="{{url('/front/images/gallery/5.jpg')}}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/6.jpg">
                <img src="{{url('/front/images/gallery/6.jpg')}}" alt="gallery img">
              </a>
            </div><!-- /.gallery-images-wrapper -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section><!-- /.Gallery -->

    <!-- ======================
     Text Content
    ========================= -->
    <section class="pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <span class="text__block-subtitle">Challenge!</span>
            <h5 class="text__block-title">Proven Record Of The High Performance & Reliability</h5>
          </div>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="text__block-desc">Bifacial solar modules enable EPCs, installers, contractors and solar PV
              developers to maximize power density, with dual-side light capture resulting in increased power output at
              a lower cost. Delivering an attractive design, low-degradation and maximum power density, the bifacial
              modules we supply are made from high-purity silicon to ensure superior cell efficiency and lifespan.
            </p>
            <p class="text__block-desc">Bifacial panels are eligible for Targray’s flexible wholesale solar financing
              platform, designed to help businesses of all sizes preserve their working capital, unlock value and
              accelerate growth. By leveraging Targray Group’s robust financing facility and our decades-long
              partnerships with leading international PV manufacturers, we’re able to create tailored supply chains </p>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
            <ul class="list-items list-unstyled mb-30">
              <li>Resulting in 30% increased power output at lower cost.</li>
              <li>Designed for extreme weather conditions (snow, wind).</li>
              <li>Manufactured from superior-grade silicon for cell efficiency.</li>
              <li>Up to 50 years life span; by 25 year product guarantee.</li>
              <li>Virtual absence of potential induced degradation (PID).</li>
              <li>Designed and engineered in Egypt.</li>
            </ul>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content -->

    <!-- ======================
      counters
    ========================= -->
    <section class="counters pt-0 pb-100">
      <div class="container">
        <div class="row">
          <!-- counter item #1 -->
          <div class="col-6 col-sm-3">
            <div class="counter-item">
              <h4 class="counter">6,154</h4>
              <p class="counter__desc">Projects Completed In Last 5 Years</p>
              <div class="divider__line"></div>
            </div>
          </div><!-- /.col-sm-3 -->
          <!-- counter item #2 -->
          <div class="col-6 col-sm-3">
            <div class="counter-item">
              <h4 class="counter">2,512</h4>
              <p class="counter__desc">Qualified Employees & Workers With Us</p>
              <div class="divider__line"></div>
            </div>
          </div><!-- /.col-sm-3 -->
          <!-- counter item #3 -->
          <div class="col-6 col-sm-3">
            <div class="counter-item">
              <h4 class="counter">1,784</h4>
              <p class="counter__desc">Happy Customers Who Trusted Us</p>
              <div class="divider__line"></div>
            </div>
          </div><!-- /.col-sm-3 -->
          <!-- counter item #4 -->
          <div class="col-6 col-sm-3">
            <div class="counter-item">
              <h4 class="counter">0,241</h4>
              <p class="counter__desc">Awards Milestones Awarded To Us</p>
              <div class="divider__line"></div>
            </div>
          </div><!-- /.col-sm-3 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.counters-layout2 -->

    <!-- ======================
    Features Layout 1
    ========================= -->
    <section class="features-layout1 pt-120 pb-80">
      <div class="bg-img"><img src="{{url('/front/images/backgrounds/3.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row mb-40">
          <div class="col-12">
            <h2 class="heading__subtitle color-primary">Making Tomorrow Different Today.</h2>
          </div><!-- /col-12 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h3 class="heading__title color-white">Energize Society With Sustainable And Reliable Energy Systems!</h3>
          </div><!-- /col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <p class="heading__desc color-gray mb-20">In recent years, new capacity across the solar value chain has
              become
              necessary to support the PV market’s growth. However, the capital required to establish and scale-up
              wafer, solar cell and solar module manufacturing facilities is considerable. </p>
            <p class="heading__desc color-gray mb-30">Together, these factors pose a serious challenge to sustainable
              operation and growth of global solar manufacturers.</p>
            <a href="#" class="btn btn__primary btn__outlined btn__custom">
              <i class="icon-arrow-right"></i>
              <span>Explore All Features!</span>
            </a>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3, "slidesToScroll": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
              <!-- Feature item #1 -->
              <div class="feature-item">
                <div class="feature__icon">
                  <i class="icon-hydro-power3"></i>
                </div>
                <h4 class="feature__title">Save Your Money</h4>
                <p class="feature__desc">Save money on utilities or increase the value of your home by installing solar
                </p>
                <a href="#" class="btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                  <span>Explore More</span>
                </a>
              </div><!-- /.feature-item -->
              <!-- Feature item #2 -->
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
              <!-- Feature item #3 -->
              <div class="feature-item">
                <div class="feature__icon">
                  <i class="icon-energy2"></i>
                </div>
                <h4 class="feature__title">Consult & Planning</h4>
                <p class="feature__desc">Our remote industrial solar systems are designed to reliably power our clients
                </p>
                <a href="#" class="btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                  <span>Explore More</span>
                </a>
              </div><!-- /.feature-item -->
              <!-- Feature item #4 -->
              <div class="feature-item">
                <div class="feature__icon">
                  <i class="icon-electric-car"></i>
                </div>
                <h4 class="feature__title">Certified Engineers</h4>
                <p class="feature__desc">Our sales engineers on our staff have experience and can design any complete
                </p>
                <a href="#" class="btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                  <span>Explore More</span>
                </a>
              </div><!-- /.feature-item -->
              <!-- Feature item #5 -->
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
              <!-- Feature item #6 -->
              <div class="feature-item">
                <div class="feature__icon">
                  <i class="icon-energy2"></i>
                </div>
                <h4 class="feature__title">Consult & Planning</h4>
                <p class="feature__desc">Our remote industrial solar systems are designed to reliably power our clients
                </p>
                <a href="#" class="btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                  <span>Explore More</span>
                </a>
              </div><!-- /.feature-item -->
              <!-- Feature item #7 -->
              <div class="feature-item">
                <div class="feature__icon">
                  <i class="icon-electric-car"></i>
                </div>
                <h4 class="feature__title">Certified Engineers</h4>
                <p class="feature__desc">Our sales engineers on our staff have experience and can design any complete
                </p>
                <a href="#" class="btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                  <span>Explore More</span>
                </a>
              </div><!-- /.feature-item -->
            </div><!-- /.carousel-->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="read-note d-flex flex-wrap mt-60">
              <div class="rating mb-10 mr-50">
                <i class="fas fa-star color-primary"></i>
                <i class="fas fa-star color-primary"></i>
                <i class="fas fa-star color-primary"></i>
                <i class="fas fa-star color-primary"></i>
                <i class="fas fa-star color-primary"></i>
              </div>
              <p class="read-note__text">
                <span class="font-weight-bold text-underlined-primary color-primary">99.9% Customer Satisfaction</span>
                based on 750+ reviews and 20,000 Objective Resource
              </p>
            </div>
          </div>
        </div>
      </div><!-- /.container -->
    </section><!-- /.Features Layout 1 -->

    <!-- =========================
       Banner layout 1
      =========================== -->
    <section class="banner-layout1 pt-0 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="text-block">
              <div class="banner__text">
                <p>While improving the yield and performance of solar energy products, our PV industry experience
                  enables
                  us to provide in-depth material sourcing, financing and supply chain expertise for every step.</p>
              </div><!-- /.banner__text -->
              <ul class="list-items list-items-layout2 list-unstyled mb-0">
                <li>Professional on-site service and support for certification.</li>
                <li>Regular light source for stable conversion efficiency.</li>
                <li>Lowest LID by periodic monitoring & superior wafer.</li>
              </ul>
            </div><!-- /.text-block -->
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="img-block">
              <img src="{{url('/front/images/banners/1.png')}}" alt="banner">
            </div><!-- /.img-block -->
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 1 -->

    <!-- ======================
     Text Content
    ========================= -->
    <section class="bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h2 class="heading__subtitle color-primary">Our Recommendations</h2>
            <h3 class="heading__title">Mono, Multi & Bi-Facial Solar Cell Products</h3>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="heading__desc mb-30">Bifacial panels are eligible for flexible wholesale solar financing
              platform,
              designed to help businesses of all sizes preserve their working capital, unlock value and accelerate
              growth. By leveraging robust financing facility and our decades-long partnerships with leading
              international PV manufacturers.</p>
            <p class="heading__desc">We’re able to create tailored supply chains solutions backed by flexible terms
              not offered by solar distributors or commercial banks.</p>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
            <p class="heading__desc mb-30">Suitable for commercial, residential and utility-scale projects, our bifacial
              panels are supported by supply chain management. For detailed product specifications, consult our Solar
              Division.</p>
            <a href="request-quote.html" class="btn btn__primary">
              <i class="icon-arrow-right"></i><span>Explore All Plans</span>
            </a>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <ul class="portfolio__meta-list d-flex flex-wrap list-unstyled mt-80 mb-0">
              <li>
                <span class="meta__name">Power</span>
                <span class="meta__desc">5,54 KWp</span>
              </li>
              <li>
                <span class="meta__name">Price</span>
                <span class="meta__desc">$ 14,600</span>
              </li>
              <li>
                <span class="meta__name">Yearly Output</span>
                <span class="meta__desc">6,721 KWh</span>
              </li>
              <li>
                <span class="meta__name">Monthly</span>
                <span class="meta__desc">$ 146</span>
              </li>
              <li>
                <span class="meta__name">Price</span>
                <span class="meta__desc">$ 14,600</span>
              </li>
            </ul><!-- /.portfolio__meta-list -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content -->

    <!-- =========================
       Banner layout 2
      =========================== -->
    <section class="banner-layout2 pt-130 pb-130">
      <div class="bg-img">
        <img src="{{url('/front/images/banners/12.jpg')}}" alt="background">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="text-block">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows": true, "dots": false'>
                <div class="heading heading-layout2">
                  <h2 class="heading__subtitle">How It Works, Step One:</h2>
                  <h3 class="heading__title">We Design & Ship.</h3>
                  <p class="heading__desc">We collaborate with you to design and deliver a system that meets your
                    utility
                    usage and needs, We also selecting equipment from 66+ manufacturers so you do not have to be
                    worried
                    or compromise with your money or with your effort.</p>
                </div>
                <div class="heading heading-layout2">
                  <h2 class="heading__subtitle">How It Works, Step Two:</h2>
                  <h3 class="heading__title">Contract Or Install</h3>
                  <p class="heading__desc">We collaborate with you to design and deliver a system that meets your
                    utility
                    usage and needs, We also selecting equipment from 66+ manufacturers so you do not have to be
                    worried
                    or compromise with your money or with your effort.</p>
                </div>
              </div>
            </div><!-- /.text-block -->
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 2 -->

    <!-- ======================
     Text Content
    ========================= -->
    <section class="pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h2 class="heading__subtitle color-primary">Results</h2>
            <h3 class="heading__title">Mono, Multi & Bi-Facial Solar Cell Products</h3>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="heading__desc mb-30">Bifacial panels are eligible for flexible wholesale solar financing
              platform,
              designed to help businesses of all sizes preserve their working capital, unlock value and accelerate
              growth. By leveraging robust financing facility and our decades-long partnerships with leading
              international PV manufacturers.</p>
            <p class="heading__desc">We’re able to create tailored supply chains solutions backed by flexible terms
              not offered by solar distributors or commercial banks.</p>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
            <div class="row">
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
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row testimonials-layout2">
          <div class="col-12">
            <div class="testimonials-wrapper">
              <div class="slick-carousel gutter-20"
                data-slick='{"slidesToShow": 2, "arrows": false, "dots": true, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                <!-- Testimonial #1 -->
                <div class="testimonial-item d-flex">
                  <div class="testimonial__thumb">
                    <img src="{{url('/front/images/testimonials/thumbs/1.png')}}" alt="thumb">
                  </div><!-- /.testimonial__thumb -->
                  <div>
                    <div class="testimonial__rating d-flex align-items-center">
                      <div class="mr-20">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <strong class="color-primary">Perfect Choice!!</strong>
                    </div><!-- /.testimonial__rating -->
                    <h4 class="testimonial__desc">They were fantastic through the entire purchase process. I had lots of
                      questions and they were patient. My system arrived it was well packed and shipping with xpo.
                    </h4>
                    <div class="testimonial__meta">
                      <h4 class="testimonial__meta-title">Ahmed Abdallah</h4>
                      <p class="testimonial__meta-desc">Front End Developer</p>
                    </div><!-- /.testimonial-meta -->
                  </div>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item d-flex">
                  <div class="testimonial__thumb">
                    <img src="{{url('/front/images/testimonials/thumbs/2.png')}}" alt="thumb">
                  </div><!-- /.testimonial__thumb -->
                  <div>
                    <div class="testimonial__rating d-flex align-items-center">
                      <div class="mr-20">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <strong class="color-primary">Excellent!!</strong>
                    </div><!-- /.testimonial__rating -->
                    <h4 class="testimonial__desc">They helped lead me through the process of system selection, site
                      layout
                      and placing my order. They were very knowledgeable and has provided guidance each step.
                    </h4>
                    <div class="testimonial__meta">
                      <h4 class="testimonial__meta-title">John Peter</h4>
                      <p class="testimonial__meta-desc">pro systems</p>
                    </div><!-- /.testimonial-meta -->
                  </div>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item d-flex">
                  <div class="testimonial__thumb">
                    <img src="{{url('/front/images/testimonials/thumbs/3.png')}}" alt="thumb">
                  </div><!-- /.testimonial__thumb -->
                  <div>
                    <div class="testimonial__rating d-flex align-items-center">
                      <div class="mr-20">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <strong class="color-primary">Perfect Choice!!</strong>
                    </div><!-- /.testimonial__rating -->
                    <h4 class="testimonial__desc">They were fantastic through the entire purchase process. I had lots of
                      questions and they were patient. My system arrived it was well packed and shipping with xpo.
                    </h4>
                    <div class="testimonial__meta">
                      <h4 class="testimonial__meta-title">Ahmed Abdallah</h4>
                      <p class="testimonial__meta-desc">Digital Media Manager</p>
                    </div><!-- /.testimonial-meta -->
                  </div>
                </div><!-- /. testimonial-item -->
              </div><!-- /.carousel -->
            </div>
            <ul class="social-icons justify-content-center mt-40 mb-40 list-unstyled">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content -->

    <!-- =========================== 
      portfolio Grid 
    ============================= -->
    <section class="portfolio-grid pt-50 pb-50 border-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__title fz-25">Related Projects</h2>
            </div><!-- /heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- portfolio item #1 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{url('/front/images/portfolio/grid/1.jpg')}}" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__body">
                <h4 class="portfolio__title"><a href="#">The Fallingwater House</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Building</a><a href="#">Interior</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #2 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{url('/front/images/portfolio/grid/2.jpg')}}" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__body">
                <h4 class="portfolio__title"><a href="#">The Guggenheim Museum</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Construction</a><a href="#">Engineering</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #3 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{url('/front/images/portfolio/grid/3.jpg')}}" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__body">
                <h4 class="portfolio__title"><a href="#">Neue National Galerie</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Renovation</a><a href="#">Architecture</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row-->
      </div><!-- /.container -->
    </section><!-- /.portfolio Grid -->
    @endsection