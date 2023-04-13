 <header class="header header-layout1">
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <i class="icon-mail"></i>
                    <a href="mailto:info@e2eag.com">Email: info@e2eag.com</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i>
                    <a href="{{url('/contact-us')}}">Mon - Fri: 8:00Uhr - 17:00Uhr</a>
                  </li>
                
                </ul><!-- /.contact__list -->
                <div class="d-flex align-items-center">
                  <form class="header-topbar__search mr-20">
                    <input type="text" class="form-control" placeholder="Suche">
                    <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                  </form>
                  <ul class="social-icons list-unstyled mb-0 mr-20">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul><!-- /.social-icons -->
                  <div class="dropdown lang-dropdown">
                    <button class="dropdown-toggle lang-dropdown-toggle" id="langDropdown" data-toggle="dropdown">
                      <img src="{{url('front/images/flags/gr.png')}}" alt="en"> <span>Deutsch</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="langDropdown">
                      <a class="dropdown-item" href="#">
                        <img src="{{url('front/images/flags/fr.png')}}" alt="en"> <span>France</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img src="{{url('front/images/flags/en.png')}}" alt="en"> <span>English</span>
                      </a>
                    </div>
                  </div>
                   @if(auth()->check())
                    <div class="dropdown user-dropdown">
                        <button class="dropdown-toggle user-dropdown-toggle" id="langDropdown" data-toggle="dropdown">
                            <span class="text-capitalize">{{ (auth()->user()->name) ? auth()->user()->name : "" }}</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="langDropdown">
                            <a class="dropdown-item" href="javascript:void(0);" href="javascript:void(0);" onclick="popup(this);" data-method="get" data-url="{{ route('view.front.viewProfile') }}" >
                                <span>User Profile</span>
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                     @endif
                  </div>
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{url('front/images/logo/logo.png')}}" class="logo" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav">
              <li class="nav__item">
                <a href="{{url('/')}}" class="nav__item-link">Home</a>
              </li>
              <!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="{{url('/about-us')}}" class="nav__item-link">Unternehmen</a>
                <button class="dropdown-toggle" data-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="{{url('/about-us')}}" class="nav__item-link">Über Uns</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="{{url('/b2e')}}" class="nav__item-link">Build2Energy</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="{{url('/konzept')}}" class="nav__item-link">Konzept</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="{{url('/investor-relations')}}" class="nav__item-link">Referenzen</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              
              <li class="nav__item">
                <li class="nav__item has-dropdown">
                  <a href="{{url('/about-us')}}" class="nav__item-link">Partnerunternehmen</a>
                  <button class="dropdown-toggle" data-toggle="dropdown"></button>
                  <ul class="dropdown-menu">
                    <li class="nav__item">
                      <a href="https://sax-power.net" class="nav__item-link">Sax Megastorage</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                      <a href="https://east-energy.de" class="nav__item-link">East Energy</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                      <a href="https://www.solarize.de" class="nav__item-link">Solarize Energy Solutions GmbH</a>
                    </li>
                    <li class="nav__item">
                      <a href="https://www.ernstschweizer.ch/de/home.html" class="nav__item-link">Ernst Schweizer AG</a>
                    </li>
                    <li class="nav__item">
                      <a href="https://www.umweltbank.de" class="nav__item-link">UmweltBank AG</a>
                    </li>
                  </ul><!-- /.dropdown-menu -->
                
              <li class="nav__item">
                <a href="{{url('/news')}}" class="nav__item-link">News</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="{{url('/request-quote')}}" class="nav__item-link">Kontakt</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="contact__number d-none d-xl-flex align-items-center">
            <i class="icon-phone"></i>
            <a href="tel:+792665260">CH: +41 79 2665260</a>
          </div>
            @if(!auth()->check())
                <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                    <li>
                        <a href="#" class="action__btn action__btn-cart">
                    </li>
                    <li>
                        <a href="javascript:void(0);" onclick="popup(this);" data-method="get" data-url="{{ route('view.front.login') }}" class="btn btn__primary">
                            <span>Energyscout Login</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </li>
                </ul><!-- /.navbar-actions -->
            @endif
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header>