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
    <div class="google-map-container" data-key="AIzaSyD6bqfcxs-nEx4cwDkgo8rXPzhm06r8pSY" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:43},{&quot;lightness&quot;:-11},{&quot;hue&quot;:&quot;#0088ff&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ff0000&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:99}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#808080&quot;},{&quot;lightness&quot;:54}]},{&quot;featureType&quot;:&quot;landscape.man_made&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ece2d9&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ccdca1&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#767676&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;landscape.natural&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#b8cb93&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.sports_complex&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.medical&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]}]">
      <div class="google-map"></div>
      <ul class="google-map-markers">
        <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
      </ul>
    </div>
  </section>

  <!-- Contact us-->
  <section class="section section-lg bg-gray-1 text-center">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-9 col-lg-7">
          <h3 class="heading-font font-family-base">Contacto</h3>
          <!-- RD Mailform-->
          <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{ asset('site/bat/rd-mailform.php') }}">
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