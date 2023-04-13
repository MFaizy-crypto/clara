@extends('front.layouts.master')
@section('section')
 <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="{{url('/front/images/banners/13.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading mb-0">Build 2 Energy</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Unternehmen</a></li>
                <li class="breadcrumb-item active" aria-current="page">B2E</li>
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
    Features Layout 2
    ========================= -->
    <section id="features" class="features-layout2 pt-120 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h2 class="heading__subtitle color-primary">Energieeffizienz und Rendite - mit PV-Aufdachanlagen als nachhaltige Wertanlage. </h2>
            <h3 class="heading__title">Build 2 Energy – Das Generalunternehmen </h3>
            <p class="heading__desc mb-20">Die Build 2 Energy ist das Generalunternehmen, das Sie zur sicheren und nachhaltigen Wertanlage führt. 
              <p>
              Die B2E bietet Ihnen als das erste Generalunternehmen die beste marktorientierte Lösung für Ihre energieerzeugende Wertanlage. Wir setzen auf eine ganzheitliche Herangehensweise und arbeiten eng mit unseren Partnern zusammen, um Ihnen eine maßgeschneiderte Lösung zu bieten. Dabei legen wir nicht nur Wert auf die Planung und Installation Ihrer Anlage, sondern unterstützen Sie auch bei der Auswahl der optimalen Speicherlösungen und der Umsetzung von Mieterstrommodellen sowie Volleinspeisung. Unser Erfolg basiert auf unserer langjährigen Erfahrung und dem technischen Know-how unserer höchst-kompetenten Partner in der Lieferkette. Gemeinsam bieten wir Ihnen höchste Qualität und Zuverlässigkeit sowie eine transparente und effiziente Umsetzung Ihres Projekts. Kontaktieren Sie uns gerne für eine unverbindliche Beratung und erfahren Sie mehr darüber, wie wir Ihnen die bestmögliche Lösung für Ihre Energieversorgung bieten können. Dabei legen wir besonderen Wert auf: 
            </p>
            <li>Maximale Transparenz </li>
            <li>Unabhängigkeiten in der Partnerwahl </li>
            <li>bestmögliche Versicherungsabdeckungen </li>
            <li>steueroptimierte Erträge </li>

           </p>
            <a href="/konzept" class="btn btn__primary btn__outlined btn__custom mb-40">
              <i class="icon-arrow-right"></i>
              <span>Mehr zu unserem Konzept</span>
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
                  <h4 class="feature__title">Dokumentierung</h4>
                  <p class="feature__desc">Dokumentation und Auswertung von Ist- und Soll-Zustand zur Erstellung von Lastenheften. 
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #2 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-energy2"></i>
                  </div>
                  <h4 class="feature__title">Projektierung</h4>
                  <p class="feature__desc">gebrauchsfertige Projektierung
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #3 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-eco-house"></i>
                  </div>
                  <h4 class="feature__title">Ausschreibungsverfahren </h4>
                  <p class="feature__desc">Objektive und neutrale Beschaffung durch unabhängige Ausschreibungen. 
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #4 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-biosphere"></i>
                  </div>
                  <h4 class="feature__title">Alles aus einer Hand</h4>
                  <p class="feature__desc">Gemäß des Pflichtenhefts schlüsselfertig realisiert 
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #5 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-electric-car"></i>
                  </div>
                  <h4 class="feature__title">Umfangreiche Beratung</h4>
                  <p class="feature__desc">Versicherungen, Steueroptimierung, Förderthemen, Finanzierung, Monitoring 
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #6 -->
              <div class="col-sm-6">
                <div class="feature-item feature-item-custom">
                  <div class="feature__icon">
                    <i class="icon-wind-socket"></i>
                  </div>
                  <h4 class="feature__title">Qualitäts-<br>führerschaft</br></h4>
                  <p style="color: #fff;"><div class="set_color"><li>Einziges Generalunternehmen in dieser Branche</li><li>Innovativ und transparent - unser Modell für maximale Effizienz</li> <li>Höchster Versicherungsstandart </li><li>Dokumentierte Lasten- und Pflichthefte </li></p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features Layout 2 -->

    <!-- =========================
       Banner layout 2
      =========================== -->
    <section class="banner-layout2 pt-130 pb-130">
      <div class="bg-img">
        <img src="{{url('/front/images/banners/14.jpg')}}" alt="background">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="text-block">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows": true, "dots": false'>
                <div class="heading heading-layout2">
                  <h2 class="heading__subtitle">How It Works, Step One:</h2>
                  <h3 class="heading__title">Analysiert - Fertig projektiert - schlüsselfertig - in Betrieb </h3>
                  <p class="heading__desc">Wir projektieren gemeinsam mit Ihnen und unseren Expertenteams Ihre Anlagen und analysieren alle möglichen Optionen. Sie erhalten schlüsselfertige, dokumentierte PV-Wertanlagen und werden bei der Abnahme und Inbetriebnahme von unseren erfahrenen Experten begleitet. </p>
                </div>
                <div class="heading heading-layout2">
                  <h2 class="heading__subtitle">How It Works, Step Two:</h2>
                  <h3 class="heading__title">Förderung -Finanzierung-Versicherung-Steueroptimierung </h3>
                  <p class="heading__desc">Wir bieten unseren Kunden nicht nur die neueste Technologie und innovative Softwarelösungen, sondern sind auch als umfassender Partner in allen anderen Belangen zur Seite. Hierzu zählen beispielsweise Finanzierung und Versicherung, Förderthemen, Monitoring und Vermarktung von Anlagen sowie Steueroptimierung. Durch eine enge Zusammenarbeit mit unseren Kunden und unserer Erfahrung in der Branche stellen wir sicher, dass jeder Kunde eine individuell auf seine Bedürfnisse zugeschnittene Lösung erhält.    
                    </p>
                </div>
              </div>
            </div><!-- /.text-block -->
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 2 -->


   

    

    <!-- ========================
     
    @endsection