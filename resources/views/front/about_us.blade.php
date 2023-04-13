@extends('front.layouts.master')
@section('section')
 <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="{{url('/front/images/page-titles/title1.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading mb-0">Über uns</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Unternehmen</a></li>
                <li class="breadcrumb-item active" aria-current="page">Über uns</li>
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
            <h2 class="heading__subtitle color-primary">Gemeinsam für eine nachhaltige Zukunft – fangen wir heute an </h2>
            <h3 class="heading__title">Wir sind Elements 2 Energy!</h3>
            <p class="heading__desc mb-20">Die Elements 2 Energy ist ein flexibler Energieberater und versteht sich als One-Stop-Anbieter für die Projektierung, den Betrieb und Investitionen in eigengenutzte oder fremdgenutzte Energieerzeugungssysteme. Durch unsere dynamische Herangehensweise bieten wir den, für Sie und Ihr Vorhaben, optimalen abgestimmten Komfort, sodass Sie risikominimiert und bedarfsgerecht in Ihre Projektentwicklung übergehen können. Wir begleiten Sie von Beginn an, gemeinsam mit unseren Fachpartnern und Partnerunternehmen in den jeweiligen Entwicklungsschritten. Beginnend mit der anfänglichen Potenzialanalyse und Machbarkeit, des ausgewählten Projektstandortes, bis hin zur Inbetriebnahme Ihres Kraftwerkes. Wir eruieren des Weiteren, auch die Finanzierung und Förderrahmenbedingungen und kümmern uns um die Kommunikation mit den jeweiligen Baubehörden und Netzbetreibern. 
            Unsere Tätigkeiten sind vor allem darauf ausgerichtet, folgende Aspekte in den Vordergrund zu stellen: 
            </p>
            <div class="listing-custom-group">
            <li>Maximale Kundenzufriedenheit und –Treue</li>
            <li>Zielgerichtete Beratung unserer Kunden und Auftraggeber</li>
            <li>Reibungslose und offene Kommunikation in allen Bereichen</li>
            <li>Sicherung der nachhaltigen Versorgung mit elektrischem Strom aus erneuerbaren Energien</li>
            <li>Versorgung mit elektrischem Strom aus nachhaltigen Energiequellen</li>
            </div>
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
                  <h4 class="feature__title">Projektierung</h4>
                  <p class="feature__desc">Innovative Projekte durch professionelle Standort- und Potentialanalyse. 
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #2 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-biosphere"></i>
                  </div>
                  <h4 class="feature__title">Alles aus einer Hand</h4>
                  <p class="feature__desc">Schlüsselfertige Energieerzeugungsanlagen 
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #3 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-eco-house"></i>
                  </div>
                  <h4 class="feature__title">Nachhaltige Energie durch Sonnenkraft</h4>
                  <p class="feature__desc">Effiziente Energiekonzepte mit Photovoltaik und implementierten Speicherlösungen 
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #4 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-energy2"></i>
                  </div>
                  <h4 class="feature__title">Umfangreiche Beratung </h4>
                  <p class="feature__desc">Versicherungen, Förderthemen, Finanzierung, Monitoring
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #5 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-electric-car"></i>
                  </div>
                  <h4 class="feature__title">E-Fuels </h4>
                  <p class="feature__desc">Effiziente und nachhaltige Produktion von E-Fuels 
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
                  <p  style="color: #fff;"><div class="set_color"><li>Höchste Ergänzungsrendite für Biogasanlagen, Müllverbrennungsanlagen, Betonwerke, Raffinerien und Chemieanlagen.</li><li>Innovativ und transparent - unser Modell für maximale Effizienz</li> <li>Höchster Versicherungsstandart </li></p></div>
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
                  <h3 class="heading__title">Fertig projektiert - schlüsselfertig - in Betrieb </h3>
                  <p class="heading__desc">Wir projektieren gemeinsam mit Ihnen und unseren Expertenteams Ihre Anlagen und durchleuchten alle möglichen Optionen. Sie erhalten schlüsselfertige Photovoltaikanlagen und werden bei der Abnahme und in Betriebnahme von unseren erfahrenen Ingenieuren beraten.</p>
                </div>
                <div class="heading heading-layout2">
                  <h2 class="heading__subtitle">How It Works, Step Two:</h2>
                  <h3 class="heading__title">Förderung -Finanzierung-Versicherung </h3>
                  <p class="heading__desc">Wir stellen unseren Kunden nicht nur die neueste Technologie und innovative Softwarelösungen zur Verfügung, sondern stehen auch als umfassender Partner in allen anderen Belangen zur Seite. Dazu gehören Finanzierung und Versicherung, Förderthemen, Monitoring und Vermarktung von Anlagen. Wir setzen auf eine enge Zusammenarbeit mit unseren Kunden und stehen ihnen mit unserem umfangreichen Know-how und unserer Erfahrung in der Branche zur Seite.   
                    </p>
                </div>
              </div>
            </div><!-- /.text-block -->
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 2 -->


   

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="{{url('/front/images/page-titles/3.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading mb-0">Leadership</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Unternehmen</a></li>
                <li class="breadcrumb-item"><a href="#">Über uns</a></li>
                <li class="breadcrumb-item active" aria-current="page">Leadership Team</li>
              </ol>
            </nav>
            <a href="#team" class="scroll-down">
              <i class="icon-arrow-down"></i>
            </a>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

  <!-- ========================
        Team layout 1
    ========================== -->
    <section id="team" class="team-layout1 pb-30">
      <div class="container">
        <div class="row">
          <!-- Member #1 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="{{url('/front/images/team/1.jpg')}}" alt="member img">
              </div><!-- /.member-img -->
              <div class="member__info d-flex align-items-center justify-content-between">
                <div>
                  <h5 class="member__name">Marcel Seidenspinner</h5>
                  <p class="member__desc">Gründer</p>
                </div>
                <!--<ul class="social-icons list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul> -->
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #2 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="{{url('/front/images/team/2.jpg')}}" alt="member img">
              </div><!-- /.member-img -->
              <div class="member__info d-flex align-items-center justify-content-between">
                <div>
                  <h5 class="member__name">Pascal Rafael Schütz</h5>
                  <p class="member__desc">Gründer</p>
                </div>
                <!--<ul class="social-icons list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>-->
              </div><!-- /.member-info -->
            </div><!-- /.member -->
            </div><!-- /.col-lg-4 -->

            <!-- Member #3 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="{{url('/front/images/team/4.jpg')}}" alt="member img">
              </div><!-- /.member-img -->
              <div class="member__info d-flex align-items-center justify-content-between">
                <div>
                  <h5 class="member__name">Berthold Schöllhorn </h5>
                  <p class="member__desc">Steueroptimierung</p>
                </div>
                <!--<ul class="social-icons list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>-->
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          
        </div> <!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Team layout 1  -->

    <!-- ========================
     
    @endsection