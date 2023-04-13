@extends('front.layouts.master')
@section('section')
 <section class="contact-layout1 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="contact-panel p-0 box-shadow-none">
              <div class="contact__panel-info mb-30">
                <div class="contact-info-box">
                  <h4 class="contact__info-box-title">Our Location</h4>
                  <ul class="contact__info-list list-unstyled">
                    <li>Gewerbering 5
                      <br>CH-6105 Schachen</li>
                  </ul><!-- /.contact__info-list -->
                </div><!-- /.contact-info-box -->
                <div class="contact-info-box">
                  <h4 class="contact__info-box-title">Quick Contact</h4>
                  <ul class="contact__info-list list-unstyled">
                    <li>Email: <a href="mailto:info@e2eag.com">info@e2eag.com</a></li>
                  
                  </ul><!-- /.contact__info-list -->
                </div><!-- /.contact-info-box -->
                <div class="contact-info-box">
                  <h4 class="contact__info-box-title">Opening Hours</h4>
                  <ul class="contact__info-list list-unstyled">
                    <li>From Monday - Friday</li>
                    <li>8 am to 7 pm</li>
                  </ul><!-- /.contact__info-list -->
                </div><!-- /.contact-info-box -->
                <a href="#" class="btn btn__primary">
                  <i class="icon-arrow-right"></i>
                  <span>Request A Quote</span>
                </a>
              </div><!-- /.contact__panel-info -->
              <form method="post" action="assets/php/contact.php" id="contactForm" class="contact__panel-form mb-30">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact__panel-title">Treten Sie mit uns in Kontakt</h4>
                    <p class="contact__panel-desc mb-40">Fragen Sie Uns Einfach Nach Der Besten Lösung Für Ihre Potentielle Solarfläche.</p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="contact-email" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Telefon" id="contact-Phone"
                        name="contact-phone" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <select>
                        <option value="0">Service Auswählen</option>
                        <option value="1">Unterlagen anfordern</option>
                        <option value="2">Persönliches Gespräch</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Weitere Informationen" placeholder="Message"
                        id="contact-messgae" name="contact-messgae" required></textarea>
                    </div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn__secondary">
                      <i class="icon-arrow-right"></i><span>Anfrage einholen</span>
                    </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.contact__panel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->
    @endsection