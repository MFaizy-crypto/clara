@extends('front.layouts.master')
@section('section')
 <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="{{url('/front/images/page-titles/title1.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading mb-0">Konzept</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Unternehmen</a></li>
                <li class="breadcrumb-item active" aria-current="page">Konzept</li>
              </ol>
            </nav>
            <a href="#features" class="scroll-down">
              <i class="icon-arrow-down"></i>
            </a>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->
   
    
    <!-- ======================
      Text Content Section
    ========================= -->
    <section class="text-content-section pb-90">
      <div class="container">
        <div class="row">
          <!--<div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-right mb-30">
              <div class="widget widget-categories">
                <h5 class="widget__title">Services</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                    <li>
                      <span>Projektierte/ dokumentierte
                         PV Anlagen und Projektrechte</span></a>
                    </li>
                    <li>
                        <span>Schlüsselfertige Photovoltaikanlagen Anlagen</span></a>
                    </li>
                    <li>
                        <span>Aktive Photovoltaikanlagen Anlagen</span></a>
                    </li>
                    <li>
                        <span>Softwarelösungen PPA Vermarktung und Matching von Anlagen</span></a>
                    </li>
                    <li>
                        <span>Versicherungen, Förderthemen, Finanzierung und Monitoring</li></span></a>
                    </li>
                    <li>
                      <span>Beratungsleistungen</span></a>
                      <li>
                        <span>Energiekonzepte mit implementierten, Speicherlösungen</li></span></a>
                      </li>
                    </li>
                  </ul>
                </div><!-- /.widget-content -->
             <!-- </div><!-- /.widget-categories -->
           <!--   <div class="widget widget-help bg-overlay bg-overlay-primary">
                <div class="bg-img"><img src="{{url('/front/images/banners/7.jpg')}}" alt="banner"></div>
                <div class="widget__content">
                  <h5 class="widget__title">Greenscout's und Flächenbesitzer </h5>
                  <p class="widget__desc mb-30">Profitieren Sie von unserem weltweiten Netzwerk
                    und helfen Sie uns nachhaltige Ziele zu erreichen.
                    Egal ob Sie Flächenbesitzer- oder als Greenscout unterwegs sind, durch eine Kooperation profitieren Sie und die Umwelt.
                  </p>
                  <a href="request-quote.html" class="btn btn__white btn__outlined btn__block mb-30">
                    Treten Sie mit uns in Kontakt
                  </a>
                  <div class="contact__number d-none d-xl-flex align-items-center">
                    <i class="icon-phone"></i>
                    <a href="tel:5565454117">CH: +41 406 7852</a>
                  </div>
                </div><!-- /.widget-download -->
            <!--  </div><!-- /.widget-help -->
            <!--  <div class="widget widget-download">
                <h5 class="widget__title">Download</h5>
                <div class="widget__content">
                  <a href="#" class="btn btn__primary btn__block mb-20">
                    <span>Company Pitch Deck</span>
                    <img src="{{url('/front/images/icons/pdf.png')}}" alt="pdf">
                  </a>
                  <a href="#" class="btn btn__secondary btn__block btn__hover3">
                    <span>Company Brochure</span>
                    <img src="{{url('/front/images/icons/pdf.png')}}" alt="pdf">
                  </a>
                </div><!-- /.widget-content -->
             <!-- </div><!-- /.widget-download -->
          <!-- </aside><!-- /.sidebar -->
        <!--  </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-12">
            

            <div class="row">
              <div class="col-12">
                <h5 class="fz-25">Photovoltaik-Freiflächenanlagen </h5>
              </div>
              <!-- gallery item #1 -->
              <div class="col-sm-6">
                <p class="text__block-desc">Die Double EE ist hierbei als unabhängiger PV-Makler tätig. Ihr Fokus liegt auf der Akquise von Pachtflächen für Photovoltaik-Freilandanlagen sowie der Begleitung von Kunden bis zum Aufstellungsbeschluss. Dabei vergleicht sie Pachtangebote und unterstützt Kunden bei der Auswahl des passenden Projektpartners für die Projektierung und Fertigstellung der Anlage. Die Partnergesellschaften der Double EE übernehmen dabei die Bauplanung und Realisierung des Projekts, während die Double EE als unabhängiger Partner ihre Kunden neutral und unvoreingenommen berät und maßgeschneiderte Lösungen findet. Durch gezieltes Marketing und langfristige Kundenbeziehungen sichert sie ihre Rentabilität und trägt zur Förderung erneuerbarer Energien bei. 
                </p>
              
              </div><!-- /.col-sm-6 -->
              <!-- gallery item #2 -->
              <div class="col-sm-4">
                <a href="{{url('/front/images/charts/2.png')}}" data-lightbox="image-1">
                <img src="{{url('/front/images/charts/2.png')}}" alt="chart" class="mb-40">
                </a>
              </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->


            <div class="row">
              <div class="col-12">
               
              </div>
              <!-- gallery item #2 -->
              <div class="col-sm-4">
              <a href="{{url('/front/images/charts/3_1.jpg')}}" data-lightbox="image-2_1">
                	<img src="{{url('/front/images/charts/3_1.jpg')}}" alt="chart" class="mb-40">
              </a>
              <a href="{{url('/front/images/charts/3_2.jpg')}}" data-lightbox="image-2_2">
				  	    <img src="{{url('/front/images/charts/3_2.jpg')}}" alt="chart" class="mb-40"> 
              </a>
				      <a href="{{url('/front/images/charts/3.3.jpg')}}" data-lightbox="image-2_3">
					    <img src="{{url('/front/images/charts/3.3.jpg')}}" alt="chart" class="mb-40">
             </a>
              </div><!-- /.col-sm-6 -->
                <!-- gallery item #1 -->
                <div class="col-sm-6">
                <h5 class="fz-25">Power-2-X  </h5>
                <p class="text__block-desc">Power-2-X bezieht sich auf verschiedene Technologien zur Umwandlung von elektrischer Energie in synthetische Energieträger und Rohstoffe. Bei Double EE konzentrieren wir uns auf SynFuels, synthetische Energieträger, die aus erneuerbarem Strom und nicht-fossilem CO2 hergestellt werden und daher klimaneutral sind. Diese E-Fuels können als flüssige oder gasförmige Brennstoffe eingesetzt werden und ermöglichen die Substitution von verschiedenen Arten von Kraftstoffen. 
                </p>
                <p class="text__block-desc">Neben ihrer Verwendung als Brennstoffe können Power-2-X-Produkte auch als CO2-neutrale Rohstoffe in der chemischen Industrie eingesetzt werden. Bei Double EE arbeiten wir mit unseren kompetenten Partnern zusammen, um hochmoderne Bio-Fuel-Kraftwerke an geeigneten Standorten zu planen, zu bauen und zu betreiben. Diese Kraftwerke werden ausschließlich mit erneuerbarem Strom aus Photovoltaik- und Windenergie betrieben und nutzen grünes CO2 aus Biogasanlagen oder Holzschnitzelkraftwerken zur Produktion von Bio-Fuels. 
                  </p>
                  <p class="text__block-desc">Durch den Einsatz von Elektrolyse wird Sauerstoff als Nebenprodukt erzeugt, der in anderen Anwendungen wie beispielsweise Kläranlagen eingesetzt werden kann. Wir setzen auf dynamisch fahrbare Bio-X-Anlagen, um überschüssigen Strom aus erneuerbaren Quellen sinnvoll zu nutzen. Diese Anlagen können sogar rückverstromt werden und somit am Primärenergiemarkt teilnehmen. 
                  </p>
                  <p class="text__block-desc">Als unabhängiger PV-Makler ist die Double EE in diesem Segment tätig und bietet ihren Kunden eine umfassende Beratung und Unterstützung bei der Planung und Umsetzung von PV-Freilandanlagen zur Erzeugung von E-Fuels. Wir analysieren die Standorte, wählen geeignete Anlagenkomponenten und Lieferanten aus, erstellen Konzepte und unterstützen bei der Beantragung von Fördermitteln. Dabei arbeiten wir eng mit verschiedenen Partnern zusammen, um eine optimale Lösung für den Kunden zu gewährleisten. Unser Alleinstellungsmerkmal ist unsere Expertise im Bereich der synthetischen Erzeugungsanlagen und unsere unabhängige und neutrale Beratung, die eine qualitativ hochwertige Umsetzung des Projekts garantiert. Wir legen großen Wert auf die Qualitätssicherung und Überwachung der Umsetzung, um unseren Kunden ein bestmögliches Ergebnis zu liefern. 
                  </p>
              
              </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->

            <div class="row">
              <div class="col-12">
                <h5 class="fz-25">B2E </h5>
              </div>
              <!-- gallery item #1 -->
              <div class="col-sm-6">
                <p class="text__block-desc">Die B2E ist das erste Generalunternehmen, das Ihnen die beste marktorientierte Lösung für Ihre energieerzeugende Wertanlage bietet. Als Ihr zuverlässiger Partner arbeiten wir mit Ihnen eng zusammen, um eine maßgeschneiderte Lösung zu entwickeln, die auf Ihre spezifischen Bedürfnisse zugeschnitten ist. Wir übernehmen nicht nur die Planung und Installation Ihrer Anlage, sondern unterstützen Sie auch bei der Auswahl der optimalen Speicherlösungen sowie der Umsetzung von Mieterstrommodellen und Volleinspeisung. Mit unserer ganzheitlichen Herangehensweise und unserer Erfahrung sorgen wir für eine effiziente Umsetzung Ihres Projekts.  
                </p>
                <p class="text__block-desc">Als Generalunternehmen bieten wir Ihnen einen klaren Vorteil gegenüber anderen Anbietern auf dem Markt. Durch unsere Zusammenarbeit mit hochkompetenten Partnern in der Lieferkette können wir Ihnen höchste Qualität und Zuverlässigkeit garantieren. Unser breites Netzwerk an Spezialisten ermöglicht es uns, Ihnen ein umfassendes Leistungsspektrum aus einer Hand zu bieten. Dadurch reduzieren wir Schnittstellen und können die Kommunikation zwischen den verschiedenen Gewerken optimieren. Darüber hinaus verfügen wir über langjährige Erfahrung in der Energiebranche und können Ihnen somit eine umfassende Beratung und maßgeschneiderte Lösungen für Ihr Projekt bieten. 
                  </p>
                  <p class="text__block-desc">Ein weiterer Vorteil der Zusammenarbeit mit uns als Generalunternehmen ist die transparente und effiziente Umsetzung Ihres Projekts. Wir kümmern uns um die Koordination der verschiedenen Gewerke und sorgen dafür, dass das Projekt innerhalb des vereinbarten Zeitrahmens und Budgets abgeschlossen wird. Unser Ziel ist es, Ihnen eine maßgeschneiderte Lösung zu bieten, die Ihre Anforderungen erfüllt und gleichzeitig kosteneffizient ist. 
                  </p>
                 
              
              </div><!-- /.col-sm-6 -->
              <!-- gallery item #2 -->
              <div class="col-sm-4">
              <a href="{{url('/front/images/charts/4.png')}}" data-lightbox="image-3">
                <img src="{{url('/front/images/charts/4.png')}}" alt="chart" class="mb-40">
              </a>
              </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->


<!--
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

           <!-- <h5 class="fz-25 mt-20">Key Benifits</h5>
            <div id="accordion" class="mb-60">          <div class="text__block mb-30">
              <h5 class="text__block-title">Why Us!</h5>
              <p class="text__block-desc">Despite these diverse developments, developments in fossil fuel systems almost
                entirely eliminated any wind turbine systems larger than supermicro size. In the early 1970s, however,
                anti-nuclear protests in Denmark spurred artisan mechanics to develop microturbines of 22 kW. </p>
            </div>
            <div class="row features-layout3">
              <!-- Feature item #1 -->
             <!-- <div class="col-sm-4">
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
              <!--<div class="col-sm-4">
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
            <!--  </div><!-- /.col-sm-4 -->
              <!-- Feature item #3 -->
             <!-- <div class="col-sm-4">
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
            <!--  </div><!-- /.col-sm-4 -->
              <!--<div class="accordion-item">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse1">
                  <a class="accordion-item__title" href="#">Which Plan Is Right For Me?</a>
                </div><!-- /.accordion-item-header -->
              <!--  <div id="collapse1" class="collapse" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
               <!-- </div>
              </div><!-- /.accordion-item -->
             <!-- <div class="accordion-item">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse2">
                  <a class="accordion-item__title" href="#">Do I have to commit to a contract?</a>
                </div><!-- /.accordion-item-header -->
             <!--   <div id="collapse2" class="collapse" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
               <!-- </div>
              </div><!-- /.accordion-item -->
             <!-- <div class="accordion-item opened">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse3">
                  <a class="accordion-item__title" href="#">What Payment Methods Are Available?</a>
                </div><!-- /.accordion-item-header -->
               <!-- <div id="collapse3" class="collapse show" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
             <!--   </div>
              </div><!-- /.accordion-item -->
           <!-- </div><!-- /.accordion -->
         <!-- </div><!-- /.col-lg-8 -->
       <!-- </div><!-- /.row -->
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
                <h2 class="heading__subtitle">Eine Persönliche Beratung ist uns wichtig!</h2>
                <h3 class="heading__title">Fragen Sie uns einfach nach der Besten Lösung für Ihre potentielle Solarfläche
                </h3>
                <p class="heading__desc">Know how entsteht nicht von heute auf morgen. Lassen Sie uns gemeinsam Ihr Projekt besprechen und profitieren Sie von unsererer langjährigen Erfahrung.
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