@extends('front.layouts.master')
@section('section')
 <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="{{url('/front/images/page-titles/10.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <h1 class="pagetitle__heading mb-0">Referenzen</h1>
            <p class="pagetitle__desc mb-0">Die Double EE ist der One-Stop-Anbieter für nachhaltige Energie-Erzeugungsanlagen</p>
            <a href="#projects" class="scroll-down">
              <i class="icon-arrow-down"></i>
            </a>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->
    

    <!-- =========================== 
      portfolio standard 
    ============================= -->
<div>
  <p>
    <p>
    <section class="text-content-section pb-90">
      <div class="container">
        <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">

    <div class="row">
              <div class="col-12">
                <h5 class="fz-25">Referenzen</h5>
              </div>
              <!-- gallery item #1 -->
              <div class="col-sm-6">
                <p class="text__block-desc">Unsere Lieferkette verfügt über umfangreiche Erfahrung und Expertise in der Planung, Entwicklung und Umsetzung von Projekten im Bereich der erneuerbaren Energien, insbesondere Photovoltaik und E-Fuels. Wir haben bereits erfolgreich eine Vielzahl von Projekten realisiert und können auf eine beeindruckende Referenzliste zurückblicken. 
                </p>
                <p class="text__block-desc">Zu den Referenzen gehören unter anderem die Planung und Umsetzung von Photovoltaik-Anlagen auf Dächern von Unternehmen und öffentlichen Einrichtungen, die Installation von Solarmodulen auf Freiflächen sowie die Entwicklung von maßgeschneiderten Energiekonzepten für private und gewerbliche Kunden. 
                  </p>
                  <p class="text__block-desc">Darüber hinaus haben wir auch im Bereich der E-Fuels umfangreiche Erfahrungen gesammelt. Wir haben moderne Bio-Methanol-Kraftwerke an geeigneten Standorten geplant. Diese Kraftwerke werden ausschließlich mit grünem Strom aus Photovoltaik und Wind betrieben und nutzen grünes CO2 aus Biogasanlagen oder Holzschnitzelkraftwerken zur Produktion von Bio-Methanol. Durch den Einsatz von Elektrolyse wird Sauerstoff als Nebenprodukt erzeugt, welcher beispielsweise in Kläranlagen zum Einsatz kommen kann. 
                  </p>
                  <p class="text__block-desc">Unser Ziel ist es, unseren Kunden eine maßgeschneiderte, zuverlässige und nachhaltige Lösung für ihre Energieversorgung zu bieten. Durch unsere langjährige Erfahrung und die enge Zusammenarbeit mit unseren Partnern in der Lieferkette können wir dies erfolgreich umsetzen und unseren Kunden eine breite Palette von Dienstleistungen anbieten. 
                  </p>
              
              </div><!-- /.col-sm-6 -->
              <!-- gallery item #2 -->
              <div class="col-sm-6">
                <img src="{{url('/front/images/charts/6.png')}}" alt="chart" class="mb-40">
              </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
</div>
</section>


    <section id="projects" class="portfolio-layout2">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ul class="portfolio-filter d-flex flex-wrap justify-content-center list-unstyled">
              <li><a class="filter active" href="#" data-filter="all">ALL Works</a></li>
              <?php if(!empty($category)) { foreach ($category as $key => $value) {?>
              <li><a class="filter" href="#" data-filter=".filter-{{str_replace(' ','-',$value->name)}}">{{$value->name}}</a></li>
              <?php } } ?>
             <!--  <li><a class="filter" href="#" data-filter=".filter-finance">Finance</a></li>
              <li><a class="filter" href="#" data-filter=".filter-energy">Green Energy</a></li>
              <li><a class="filter" href="#" data-filter=".filter-infractures">Infractures</a></li>
              <li><a class="filter" href="#" data-filter=".filter-innovations">Innovations</a></li> -->
            </ul><!-- /.portfolio-filter  -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div id="filtered-items-wrap" class="row">
          <!-- portfolio item #1 -->
           <?php if(!empty($list)) { foreach ($list as $key => $value) {?>
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-{{str_replace(' ','-',$value->category->name)}} {{($key > 5)?'portfolio-hidden':''}}">
            <div class="portfolio-item">
              <div class="portfolio__img">
              <a href="{{url('/img/investor-relations/thumbnail/'.$value->image)}}" data-lightbox="image">
                <img src="{{url('/img/investor-relations/thumbnail/'.$value->image)}}" alt="portfolio img" style="width:370;height:244px;">
              </a>
              </div><!-- /.portfolio-img -->
              <div class="portfolio__body">
                <div class="portfolio__cat">
                  <a href="#">{{$value->category->name}}</a>
                </div><!-- /.portfolio-cat -->
                <h4 class="portfolio__title"><a href="#">{{$value->title}}</a></h4>
              </div><!-- /.portfolio__body -->
            </div><!-- /.portfolio-item -->
          </div>
           <?php } } ?>
           <!-- /.col-lg-4 -->
          <!-- portfolio item #2 -->
          <!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <button type="button" class="btn btn__primary btn__outlined btn__custom loadMoreportfolio mt-30">
              <i class="icon-arrow-right"></i> <span>Alle Projekte entdecken</span>
            </button>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio standard -->
    @endsection
    @section('javascript')
    <!-- <script>
    lightbox.option({
      'maxWidth': 1000,
      'fitImagesInViewport': true

      
    })
</script> -->
@endsection