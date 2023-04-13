@extends('front.layouts.master')
@section('section')
<section class="slider">
    <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h bg-overlay bg-overlay-2">
         <div class="bg-img"><img src="{{url('/front/images/sliders/1.jpg')}}" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                <div class="slide__body">
                  <span class="slide__subtitle">Grüne Energie mit Photovoltaik</span>
                  <h2 class="slide__title">Gemeinsam in eine nachhaltige Infrastruktur</h2>
                  <p class="slide__desc">Die Double EE Gruppe ist Ihr starker und gut vernetzter Partner zur Planung und Durchführung von Energieerzeugungsanlagen.
                  </p>
                  <div class="d-flex">
                    <a href="{{url('/request-quote')}}" class="btn btn__primary mr-30">
                      <i class="icon-arrow-right"></i><span>Fläche inserieren</span>
                    </a>
                    <a href="{{url('/konzept')}}" class="btn btn__white">unser Konzept</a>
                  </div>
                </div><!-- /.slide__body -->
              </div><!-- /.col-xl-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->

        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="{{url('/front/images/sliders/2.jpg')}}" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                <div class="slide__body">
                  <span class="slide__subtitle">Technologisch ausgefeilte Energiekonzepte </span>
                  <h2 class="slide__title">Digitale, Vernetzte Infrastruktur</h2>
                  <p class="slide__desc">Digitale Anlagenüberwachung, Smarte Netzeinspeisung und Konzepte zur Speicherung der Energie spiegeln unsere Partner wider. </p>
                  <div class="d-flex">
                    <a href="{{url('/request-quote')}}" class="btn btn__primary mr-30">
                      <i class="icon-arrow-right"></i><span>Bedarfsanalyse</span>
                    </a>
                    <a href="javascript:void(0);" onclick="popup(this);" data-method="get" data-url="{{ route('view.front.login') }}" class="btn btn__white">Energyscout werden</a>
                  </div>
                </div><!-- /.slide__body -->
              </div><!-- /.col-xl-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->

        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="{{url('/front/images/sliders/7.jpg')}}" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                <div class="slide__body">
                  <span class="slide__subtitle">Klimaneutrale Kraftstoffe mithilfe von nachhaltigen Energiekonzepten</span>
                  <h2 class="slide__title">Zukunftssicher - Synthetic E-Fuels</h2>
                  <p class="slide__desc">Mithilfe von regenerativen Energien, lassen sich Kraftstoffe aus Co2 und Wasserstoff vollkommen klimaneutral erzeugen.</p>
                  <div class="d-flex">
                    <a href="{{url('/request-quote')}}" class="btn btn__primary mr-30">
                      <i class="icon-arrow-right"></i><span>Standortanalyse</span>
                    </a>
                    <a href="javascript:void(0);" onclick="popup(this);" data-method="get" data-url="{{ route('view.front.login') }}" class="btn btn__white">Energyscout werden</a>
                  </div>
                </div><!-- /.slide__body -->
              </div><!-- /.col-xl-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
    </div><!-- /.carousel -->
</section><!-- /.slider -->

<!-- ========================
      About Layout 1
    =========================== -->
<section class="about-layout1 pt-130 pb-130">
    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
            <div class="heading__layout2 mb-60">
              <h2 class="heading__subtitle">Die Double EE ist ein flexibler Energieberater zur Planung und Umsetzung Ihrer Energieprojekte </h2>
              <h3 class="heading__title">Sie besitzen eine geeignete Fläche? Wir entwickeln und optimieren Ihr Projekt</h3>
            </div><!-- /.heading__layout2 -->
          </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-2">
            <!-- counter item #1 -->
            <div class="counter-item">
              <h4 class="counter">1100</h4>
              <p class="counter__desc pr-0">gepachtete Flächen in Hektar</p>
              <div class="divider__line"></div>
            </div>
            <!-- counter item #2 -->
            <div class="counter-item">
              <h4 class="counter">120</h4>
              <p class="counter__desc pr-0">Fertiggestellte Projekte</p>
              <div class="divider__line"></div>
            </div>
            <!-- counter item #3 -->
            <div class="counter-item">
              <h4 class="counter">1500</h4>
              <p class="counter__desc pr-0">Leistung in Megawatt</p>
              <div class="divider__line"></div>
            </div>
          </div><!-- /.col-lg-2 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="video-banner-layout2">
              <img src="{{url('/front/images/about/1.jpg')}}" alt="about" class="w-100">
             
            </div><!-- /.video-banner -->
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="about__text">
              <div class="text__icon">
                <i class="icon-green-energy3"></i>
              </div>
              <p class="heading__desc font-weight-medium color-secondary mb-30">Ein eigener Solarpark auf Ihrem Grundstück? Eine Vision die sich aus eigener Kraft nur schwer umsetzen lässt. 
Mithilfe unserer Partner und unserer jahrelangen Erfahrung in der Planung und der Installation von Solarprojekten, haben Sie mit uns einen professionellen Partner an der Seite.  
              </p>
              <p class="heading__desc mb-20">Wir möchten sicherstellen, dass auch Privatpersonen und kleinere Unternehmen von den Vorteilen der Solarenergie profitieren können. Aus diesem Grund bieten wir an, Ihre Fläche zu pachten, Photovoltaikmodule zu installieren und Sie am Gewinn zu beteiligen, ohne dass Sie den hohen Investitionsbedarf für Solarflächen tragen müssen. </p>
              <p class="heading__desc mb-20">Hand in Hand in eine nachhaltige Zukunft!</p>
              <div class="d-flex align-items-center mt-30">
                <a href="{{url('/about-us')}}" class="btn btn__secondary mr-30">
                  <i class="icon-arrow-right"></i> <span>Über uns</span>
                </a>
              </div>
            </div><!-- /.about__text -->
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->

<!-- ====================== 
    services Layout 2
    ========================= -->
<section class="services-layout2 pt-120">
    <div class="bg-img"><img src="{{url('/front/images/backgrounds/5.jpg')}}" alt="background"></div>
    <div class="container">
        <div class="row mb-70">
          <div class="col-12">
            <h2 class="heading__subtitle color-primary">Investieren wir in die Erhaltung unserer natürlichen Ressourcen.</h2>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h3 class="heading__title color-white">Verpachten Sie Ihre Flächen zur Unterstützung der Energiewende! </h3>
          </div><!-- /col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <p class="heading__desc font-weight-bold color-gray mb-30">Machen Sie Ihre Projektfläche zu einer rentablen Investition. Wir unterstützen Sie bei der Entwicklung Ihrer Ideen und setzen diese gemeinsam mit Ihnen um. Unsere Projektleiter beraten Sie umfassend und erarbeiten ein Konzept, dass zu Ihren Anforderungen passt.  </p>
            <div class="d-flex align-items-center">
              <a href="{{url('/request-quote')}}" class="btn btn__primary btn__primary-style2 mr-30">
                <i class="icon-arrow-right"></i>
                <span>Projekt inserieren</span>
              </a>
              <a href="{{url('/konzept')}}" class="btn btn__white btn__link">
                <i class="icon-arrow-right"></i>
                <span>Mehr zu unserem Konzept</span>
              </a>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel carousel-arrows-light"
              data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2, "slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
              <!-- service item #1 -->
              <div class="service-item">
                <div class="service__img">
                  <img src="{{url('/front/images/services/1.jpg')}}" alt="service" loading="lazy">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Onshore Solarparks</h4>
                  <p class="service__desc">Landwirtschaftliche Flächen in rentable Solarparks transformieren </p>
                  <a href="{{url('request-quote/')}}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Fläche inserieren</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
              <!-- service item #2 -->
              <div class="service-item">
                <div class="service__img">
                  <img src="{{url('/front/images/services/2.jpg')}}" alt="service" loading="lazy">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Offshore Solar</h4>
                  <p class="service__desc">Schwimmende Photovoltaikmodule sparen landwirtschaftliche Fläche</p>
                  <a href="{{url('request-quote/')}}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Fläche Inserieren</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
              <!-- service item #3 -->
              <div class="service-item">
                <div class="service__img">
                  <img src="{{url('/front/images/services/3.jpg')}}" alt="service" loading="lazy">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Synthetische Kraftstoffe</h4>
                  <p class="service__desc">Jeder einzelne kann seinen Beitrag zur Energiewende leisten. </p>
                  <a href="{{url('request-quote/')}}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Standortanalyse</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
              <!-- service item #4 -->
              <div class="service-item">
                <div class="service__img">
                  <img src="{{url('/front/images/services/4.jpg')}}" alt="service" loading="lazy">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Gewerbe</h4>
                  <p class="service__desc">Wir sind das Generalunternehmen für Immobilienverwalter.</p>
                  <a href="{{url('request-quote/')}}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Potentialanalyse</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            
            </div><!-- /.carousel-->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <p class="read-note__text">
              <strong class="color-white">Nachhaltige und autarke Energieversorgung sind nicht nur gut für die Umwelt, sondern machen uns auch unabhängig von fossilen Energien! </strong>
            
              </a>
            </p>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.services Layout 2 -->

<!-- ======================
    Features Layout 2
    ========================= -->
<section class="features-layout2 pt-120">
    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h2 class="heading__subtitle color-primary">Gestalte heute die Zukunft von morgen. </h2>
            <h3 class="heading__title">Werden Sie unser Energyscout und erhalten Sie eine Provision für jedes erfolgreich vermittelte Projekt zur Energiegewinnung. </h3>
            <p class="heading__desc mb-30">Als Double EE Energyscout können Sie dazu beitragen, dass Ihre Region auf erneuerbare Energien umsteigt und so einen wichtigen Beitrag zum Klimaschutz leistet. Vermitteln Sie Flächen für saubere Energie und machen Sie einen Unterschied. </p>
            <p class="heading__desc mb-40">Sie erhalten von uns eine Vermittlungsprovision für jedes umgestzte Bauvorhaben</p>
            <a href="javascript:void(0);" onclick="popup(this);" data-method="get" data-url="{{ route('view.front.login') }}" class="btn btn__primary btn__outlined btn__custom mb-40">
              <i class="icon-arrow-right"></i>
              <span>Energyscout werden</span>
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
                  <h4 class="feature__title">Profitable Tippgebergemeinschaft</h4>
                  <p class="feature__desc">Sie erhalten eine fixe Vermittlungsprovision für jedes umgesetzte Bauvorhaben. 
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #2 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-biosphere"></i>
                  </div>
                  <h4 class="feature__title">Gut fürs Gewissen, Besser für die Umwelt </h4>
                  <p class="feature__desc">Brachliegende Flächen sind wertvoll - nutzen Sie sie jetzt! 
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #3 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-eco-house"></i>
                  </div>
                  <h4 class="feature__title">Klimaneutrale Energiegewinnung von morgen</h4>
                  <p class="feature__desc">Die Energiewende beginnt bei Ihnen - machen Sie mit! 
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #4 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-energy2"></i>
                  </div>
                  <h4 class="feature__title">Professionelle Projektentwicklung</h4>
                  <p class="feature__desc">Wir beraten Sie hinsichtlich der technischen Erfordernisse und Möglichkeiten.
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #5 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-electric-car"></i>
                  </div>
                  <h4 class="feature__title">Flexibles Partnernetzwerk </h4>
                  <p class="feature__desc">Wir erstellen ein passendes Konzept zu Ihrem Vorhaben und stellen uns der Herausforderung.
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #6 -->
              <div class="col-sm-6">
                <div class="feature-item feature-item-custom">
                  <div class="feature__icon">
                    <i class="icon-wind-socket"></i>
                  </div>
                  <h4 class="feature__title">Mitmachen <br> und Profitieren</h4>
                  <p class="feature__desc">Registrieren Sie sich noch heute und werden Sie Energyscout!</p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Features Layout 2 -->

<!-- ====================== 
   portfolio Layout 3
    ========================= -->
<section class="portfolio-layout3 portfolio-carousel pt-120">
    <div class="bg-img"><img src="{{url('/front/images/backgrounds/5.jpg')}}" alt="background"></div>
    <div class="container">
        <div class="row mb-60">
          <div class="col-12">
            <h2 class="heading__subtitle color-primary">Wir setzen auf erfolgreiche Projekte - die beste Werbung, die es gibt. </h2>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h3 class="heading__title color-white">Unsere nachhaltigen Projekte</h3>
          </div><!-- /col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <p class="heading__desc font-weight-bold color-gray mb-30">Mit unserer Erfahrung und professionellen Technologiepartnern haben wir schon viel bewegt. Überzeugen Sie sich selbst.</p>
            <a href="{{url('/investor-relations')}}" class="btn btn__white btn__outlined">
              <i class="icon-arrow-right"></i>
              <span>Aktuelle Projekte</span>
            </a>
          </div><!-- /.col-lg-6 -->

        </div><!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="carousel-container">
                    <div class="slick-carousel carousel-arrows-light carousel-dots-light"
                        data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2 ,"slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2,"slidesToScroll": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}]}'>
                        <!-- portfolio item #1 -->
                        <?php if(!empty($projects)) { foreach ($projects as $key => $value) { ?>


                        <div class="portfolio-item">
                            <div class="portfolio__img">
                                <img src="{{url('/img/projects/thumbnail/'.$value->image)}}" alt="project img"
                                    style="height:370px;width:370px;">
                            </div><!-- /.portfolio-img -->
                            <div class="portfolio__body">
                                <!-- <div class="portfolio__cat">
                      <a href="#">Photovoltaik</a><a href="#">Solarpark Grüneheide</a>
                    </div> -->
                                <!-- /.portfolio-cat -->
                                <h4 class="portfolio__title"><a>{{$value->title}}</a></h4>
                                <p class="portfolio__desc">{!! $value->description !!}</p>
                                <!-- <a href="{{url('/projects-single-project')}}" class="btn btn__primary btn__sm">
                      <i class="icon-arrow-right"></i>
                      <span>Zum Projekt</span>
                    </a> -->
                            </div><!-- /.portfolio__body -->
                        </div>
                        <?php } } ?>
                        <!-- /.portfolio-item -->
                        <!-- portfolio item #2 -->
                        <!-- /.portfolio-item -->
                        <!-- portfolio item #6 -->
                        <!-- /.portfolio-item -->
                    </div><!-- /.carousel-->
                    <a href="{{url('/projects')}}" class="view-projects d-none d-xl-flex">Alle Projekte</a>
                </div><!-- /.carousel-container -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.portfolio Layout 3 -->

<!-- ======================
    Testimonials 
    ========================= -->
<section class="testimonials-layout1 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-40">
                    <h2 class="heading__subtitle color-primary">In der Schweiz daheim</h2>
                    <h3 class="heading__title">Weltweit engagiert</h3>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <img src="{{url('/front/images/backgrounds/map2.png')}}" alt="map">
            <!-- Testimonial #1 -->
            <div class="testimonial-box">
              <div class="testimonial__thumb">
                <img src="{{url('/front/images/testimonials/thumbs/1.png')}}" alt="author thumb">
                <span class="pulsing-animation pulsing-animation-1"></span>
                <span class="pulsing-animation pulsing-animation-2"></span>
                <span class="pulsing-animation pulsing-animation-3"></span>
              </div><!-- /.testimonial-thumb -->
              <div class="testimonial__panel">
                <div class="testimonial__desc">
                Gemeinsam mit unseren internationalen Partnern in eine nachhaltige Zukunft.
                </div>
              </div><!-- /.testimonial-panel -->
            </div><!-- /. testimonial-box -->
            <!-- Testimonial #2 -->
            <div class="testimonial-box">
              <div class="testimonial__thumb">
                <img src="{{url('/front/images/testimonials/thumbs/2.png')}}" alt="author thumb">
                <span class="pulsing-animation pulsing-animation-1"></span>
                <span class="pulsing-animation pulsing-animation-2"></span>
                <span class="pulsing-animation pulsing-animation-3"></span>
              </div><!-- /.testimonial-thumb -->
              <div class="testimonial__panel">
                <div class="testimonial__desc">
                Global denken, lokal handeln. 
                </div>
              </div><!-- /.testimonial-panel -->
            </div><!-- /. testimonial-box -->
            <!-- Testimonial #3 -->
            <div class="testimonial-box">
              <div class="testimonial__thumb">
                <img src="{{url('/front/images/testimonials/thumbs/3.png')}}" alt="author thumb">
                <span class="pulsing-animation pulsing-animation-1"></span>
                <span class="pulsing-animation pulsing-animation-2"></span>
                <span class="pulsing-animation pulsing-animation-3"></span>
              </div><!-- /.testimonial-thumb -->
              <div class="testimonial__panel">
                <div class="testimonial__desc">
                Nachhaltigkeit ist kein Trend, sondern eine Notwendigkeit für die Zukunft. 
                </div>
              </div><!-- /.testimonial-panel -->
            </div><!-- /. testimonial-box -->
            <!-- Testimonial #4 -->
            <div class="testimonial-box testimonial-hover-left">
              <div class="testimonial__thumb">
                <img src="{{url('/front/images/testimonials/thumbs/4.png')}}" alt="author thumb">
                <span class="pulsing-animation pulsing-animation-1"></span>
                <span class="pulsing-animation pulsing-animation-2"></span>
                <span class="pulsing-animation pulsing-animation-3"></span>
              </div><!-- /.testimonial-thumb -->
              <div class="testimonial__panel">
                <div class="testimonial__desc">
                Wir kleben nicht, wir setzen um! 
                </div>
              </div><!-- /.testimonial-panel -->
            </div><!-- /. testimonial-box -->
            <!-- Testimonial #5 -->
            <div class="testimonial-box testimonial-hover-left">
              <div class="testimonial__thumb">
                <img src="{{url('/front/images/testimonials/thumbs/5.png')}}" alt="author thumb">
                <span class="pulsing-animation pulsing-animation-1"></span>
                <span class="pulsing-animation pulsing-animation-2"></span>
                <span class="pulsing-animation pulsing-animation-3"></span>
              </div><!-- /.testimonial-thumb -->
              <div class="testimonial__panel">
                <div class="testimonial__desc">
                Plakate hochhalten erzeugt noch keine Energie!
                </div>
              </div><!-- /.testimonial-panel -->
            </div><!-- /. testimonial-box -->
            <!-- Testimonial #6 -->
            <div class="testimonial-box">
              <div class="testimonial__thumb">
                <img src="{{url('/front/images/testimonials/thumbs/1.png')}}" alt="author thumb">
                <span class="pulsing-animation pulsing-animation-1"></span>
                <span class="pulsing-animation pulsing-animation-2"></span>
                <span class="pulsing-animation pulsing-animation-3"></span>
              </div><!-- /.testimonial-thumb -->
              <div class="testimonial__panel">
                <div class="testimonial__desc">
                  Wir bauen auf starke Partner. 
                </div>
              </div><!-- /.testimonial-panel -->
            </div><!-- /. testimonial-box -->
            <!-- Testimonial #7 -->
            <div class="testimonial-box">
              <div class="testimonial__thumb">
                <img src="{{url('/front/images/testimonials/thumbs/4.png')}}" alt="author thumb">
                <span class="pulsing-animation pulsing-animation-1"></span>
                <span class="pulsing-animation pulsing-animation-2"></span>
                <span class="pulsing-animation pulsing-animation-3"></span>
              </div><!-- /.testimonial-thumb -->
              <div class="testimonial__panel">
                <div class="testimonial__desc">
                Flexibler Handlungsrahmen 
                </div>
              </div><!-- /.testimonial-panel -->
            </div><!-- /. testimonial-box -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.testimonials -->

<!-- ======================
    Cta Layout1 
    ========================= -->
<section class="cta-layout1 pt-0">
    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="cta__item d-flex">
              <div class="cta__icon custom-icon">
                <i class="icon-solar-panel"></i>
              </div><!-- /.cta__icon -->
              <div class="cta__body">
                <h4 class="cta__title">Photovoltaik / Synthetic E-Fuels</h4>
                <p class="cta__desc">Wir konzipieren und bebauen Projektflächen auf höchstem technischem Niveau. </p>
                <a href="{{url('request-quote')}}" class="btn btn__link btn__primary">
                  <i class="icon-arrow-right"></i>
                  <span>Jetzt anfragen</span>
                </a>
              </div><!-- /.cta__body -->
            </div><!-- /.cta__item -->
          </div><!-- /.col-md-6 -->
          <div class="col-sm-12 col-md-6">
            <div class="cta__item d-flex">
              <div class="cta__icon custom-icon">
                <i class="icon-energy"></i>
              </div><!-- /.cta__icon -->
              <div class="cta__body">
                <h4 class="cta__title">Nachhaltige Energiekonzepte</h4>
                <p class="cta__desc">Wir beraten Sie als Generalunternehmer hinsichtlich Ihres Immobilienportfolios</p>
                <a href="{{url('request-quote')}}" class="btn btn__link btn__primary">
                  <i class="icon-arrow-right"></i>
                  <span>Jetzt beraten lassen.</span>
                </a>
              </div><!-- /.cta__body -->
            </div><!-- /.cta__item -->
          </div><!-- /.col-md-6 -->
        </div><!-- /.cta -->
        <div class="row">
          <div class="col-12">
            <p class="text__link text-center mb-0">Sie benötigen weitere Infos, um unser Konzept zu verstehen? zu unserem Konzept
              <a href="{{url('konzept')}}">
                <span>zu unserem Konzept</span> <i class="icon-arrow-right"></i>
              </a>
            </p>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.cta layout1 -->

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
                <h2 class="heading__subtitle">Eine persönliche Beratung ist uns wichtig!</h2>
                <h3 class="heading__title">Wir beraten Sie gerne und finden gemeinsam die beste Lösung für Ihre Solarfläche. 
                </h3>
                <p class="heading__desc">Langfristiger Erfolg erfordert eine solide Erfahrungsbasis. Wir möchten Ihnen daher unsere langjährige Erfahrung zur Verfügung stellen und gemeinsam mit Ihnen Ihr Projekt besprechen. 
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
                      <h4 class="fancybox__title mb-0">Nachhaltige Energie</h4>
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
                      <h4 class="fancybox__title mb-0">Maßgeschneiderte Lösungen</h4>
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
                      <h4 class="fancybox__title mb-0">Senkung der Energiekosten</h4>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-sm-4 -->
              </div><!-- /.row -->
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="contact-panel">
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
                            </div>--}}
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

<!-- =====================
         Clients
      ======================== -->
<section class="clients clients-layout2 border-bottom py-0">
    <div class="container">
        <div class="row align-items-center">


          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <div class="client">
                <a href="#"><img src="{{url('/front/images/clients/1.png')}}" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="{{url('/front/images/clients/2.jpeg')}}" alt="client"></a>
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
                <a href="#"><img src="{{url('/front/images/clients/7.jpeg')}}" alt="client"></a>1
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="{{url('/front/images/clients/8.png')}}" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="{{url('/front/images/clients/9.png')}}" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="{{url('/front/images/clients/10.png')}}" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="{{url('/front/images/clients/11.png')}}" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="{{url('/front/images/clients/12.png')}}" alt="client"></a>
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <strong class="text-center d-block mt-40"> 
Wir melden uns schnellstmöglich bei Ihnen, nachdem Ihre Anfrage eingegangen ist. 
Oder rufen Sie uns doch einfach an!
              <a href="tel:+41 79 266 52 60" class="text-underlined-primary">+41 79 266 52 60 </a>
            </strong>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.clients -->

<!-- ======================
      Blog Grid
    ========================= -->
<section class="post-grid pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-50">
                    <h2 class="heading__subtitle">News & laufende Projekte</h2>
                    <h3 class="heading__title">Neue Artikel</h3>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <!-- Post Item #1 -->
            <?php if(!empty($list)){ 
            foreach ($list as $key => $value) { ?>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post__img">
                        <a href="{{url('/blog-single-post/'.$value->id)}}">
                            <img src="{{url('/img/news-articles/thumbnail').'/'.$value->image}}" alt="News image"
                                loading="lazy" style="width:370px;height:253px;">
                        </a>
                        <span class="post__date">{{date('M d, Y',strtotime($value->created_at))}}</span>
                    </div><!-- /.post-img -->
                    <div class="post__body">
                        <div class="post__meta d-flex align-items-center">
                            <!--  <div class="post__cat">
                    <a href="#">Oil & Gas</a><a href="#">Insights</a>
                  </div> -->
                            <!-- /.post-meta-cat -->
                            <!--  <a class="post__author" href="#">Mike Dooley</a> -->
                        </div><!-- /.post-meta -->
                        <h4 class="post__title"><a href="#">{{ $value->title}}</a></h4>
                        <p class="post__desc">{!! substr($value->description, 0, 350) . '...'; !!}</p>
                        <a href="{{url('/blog-single-post/'.$value->id)}}"
                            class="btn btn__secondary btn__outlined btn__custom">
                            <i class="icon-arrow-right"></i>
                            <span>Weiterlesen</span>
                        </a>
                    </div><!-- /.post-content -->
                </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <?php } } ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Grid -->

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
          console.log(data);
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