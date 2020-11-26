@extends('layouts.site')
@section('body')

<section class="parallax-container overlay-1" data-parallax-img="{{ asset('site/images/breadcrumbs3.jpg') }}" >
    <div class="parallax-content breadcrumbs-custom context-dark"> 
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-9">
            <h2 class="breadcrumbs-custom-title ">Contacto</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Inicio</a></li>
              <li class="active">Contacto</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section section-lg text-center bg-default">
    <div class="container">
      <div class="row row-50">
        <div class="col-md-6 col-lg-4">
          <div class="box-icon-classic">
            <div class="box-icon-inner decorate-triangle"><span class="icon-xl linearicons-phone-incoming"></span></div>
            <div class="box-icon-caption">
              <h4 class="heading-font font-family-base"><a href="tel:2235792912">2235792912</a></h4>
              <p>Llamanos o comunicate por Whatsapp</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box-icon-classic">
            <div class="box-icon-inner decorate-circle"><span class="icon-xl linearicons-map2"></span></div>
            <div class="box-icon-caption">
              <h4 class="heading-font font-family-base"><a href="https://www.google.com.ar/maps/place/Z+Estilistas+y+Barberos/@-38.0323182,-57.5625399,17z/data=!3m1!4b1!4m5!3m4!1s0x9584df5c76a5794b:0xb65912d14a4e5662!8m2!3d-38.0323182!4d-57.5603512" target="_blank" rel="noopener noreferrer">
                  12 de Octubre 4902 <br> Mar del Plata</a></h4>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box-icon-classic">
            <div class="box-icon-inner decorate-rectangle"><span class="icon-xl linearicons-paper-plane"></span></div>
            <div class="box-icon-caption">
              <h4 class="heading-font font-family-base"><a href="mailto:#">zestilistas@gmail.com</a></h4>
              <p>Comunicate via email</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Google Map-->
  <section class="section">
    <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
    <!--Please note that YOUR_API_KEY should replaced with your key.-->
    <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
    <!--Google map-->
    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Z%20Estilistas%20y%20Barberos,%2012%20de%20Octubre,%20Mar%20del%20Plata,%20Provincia%20de%20Buenos%20Aires+(Z%20Estilistas%20y%20Barberos)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>

    <!--Google Maps-->
  </section>

  <!-- Contact us-->
  <section class="section section-lg bg-gray-1 text-center">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-9 col-lg-7">
          <h3 class="heading-font font-family-base mb-2">Contacto</h3>
          <!-- RD Mailform-->
          <form class="" data-form-output="form-output-global" data-form-type="contact" method="GET" action="{{ route('sendMail') }}">
            <div class="form-wrap">
              <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
              <label class="form-label" for="contact-name">Nombre</label>
            </div>
            <div class="form-wrap">
              <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
              <label class="form-label" for="contact-email">E-mail</label>
            </div>
            <div class="form-wrap">
              <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
              <label class="form-label" for="contact-phone">Celular</label>
            </div>
            <div class="form-wrap">
              <label class="form-label" for="contact-message"> Mensaje</label>
              <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-sm-7 col-lg-5">
                <button class="button button-block button-lg button-primary" type="submit">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection