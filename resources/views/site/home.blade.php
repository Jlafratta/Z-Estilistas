@extends('site.layouts.app')
@section('body')

      <!-- Swiper-->
      <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
        <div class="main-bunner-img" style="background: rgb(0,0,0);
                                            background: linear-gradient(180deg, rgba(0,0,0,1) 6%, rgba(0,0,0,0.6222864145658263) 20%, rgba(108,108,108,0) 44%, rgba(255,255,255,0) 95%),  url(&quot;{{ asset('site/images/bg-bunner-2.jpg') }}&quot;);
                                            
                                            background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
              <h1 class="box-default-title thin-title">Bienvenido</h1>
              <div class="box-default-decor"></div>
              <p class="big box-default-text">a la familia Z Estilistas.</p>
            </div>
          </div>
        </div>
      </section>

      <div class="bg-gray-1"> <!-- Gray Background starts -->

        <!-- Check availability section -->
        <section class="section-transform-top">
          <div class="container">
            <div class="box-booking">
              <form class="rd-form rd-mailform booking-form">

                <div>
                  <p class="booking-title"><span class="icon mdi mdi-account"></span><span class="icon mdi mdi-chevron-right"></span><a href="">Registrate</a></p>
                  <div class="form-wrap">
                    <p>Descuentos unicos!</p>
                  </div>
                </div>
                
                <div>
                  <p class="booking-title"><span class="icon mdi mdi-cart"></span><span class="icon mdi mdi-chevron-right"></span><a href="">Reserva tu turno</a></p>
                  <div class="form-wrap">
                    <p>En simples pasos</p>
                  </div>
                </div>

                <div>
                  <p class="booking-title"><span class="icon mdi mdi-calendar-text"></span><span class="icon mdi mdi-chevron-right"></span>Elegi el dia</p>
                  <div class="form-wrap">
                    <p>Y pasa por Z!</p>
                  </div>
                </div>

                <div>
                  <p class="booking-title">Fecha</p>
                  <div class="form-wrap2">
                    <input class="form-input" id="booking-date" type="text" name="date" data-constraints="@Required" data-time-picker="date">
                  </div>
                </div>
                
                <div>
                  <button class="button button-lg button-gray-600 btn-block" type="submit"> Buscar turno </button>
                </div>

              </form>
            </div>
          </div>
        </section>

        <!-- Featured Offers section -->
        <section class="section ">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-9 col-lg-7 wow-outer">
                <div class="wow slideInDown">
                  <h2 class="heading-font font-family-base">Ofertas destacadas</h2>
                  <p class="text-opacity-80">En Z vas a encontrar la mejor variedad de cortes, trae tu idea y hacela realidad !</p>
                </div>
              </div>
            </div>
            <div class="row row-20 row-lg-30">
              <div class="col-md-6 col-lg-4 wow-outer">
                <div class="wow fadeInUp">
                  <div class="product-featured">
                    <div class="product-featured-figure"><img src="{{ asset('site/images/product-1-370x395.jpg') }}" alt="" width="370" height="395"/>
                      <div class="product-featured-button"><a class="button button-primary" href="#">Pedi el tuyo!</a></div>
                    </div>
                    <div class="product-featured-caption">
                      <h4><a class="font-family-base product-featured-title" href="#">Z Premium</a></h4>

                      <p class="big">$350</p>

                      <span class="text-strike"> $ 400 </span>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 wow-outer">
                <div class="wow fadeInUp">
                  <div class="product-featured">
                    <div class="product-featured-figure"><img src="{{ asset('site/images/product-2-370x395.jpg') }}" alt="" width="370" height="395"/>
                      <div class="product-featured-button"><a class="button button-primary" href="#">Pedi el tuyo!</a></div>
                    </div>
                    <div class="product-featured-caption">
                      <h4><a class="font-family-base product-featured-title" href="#">Barba</a></h4>
                      
                      <p class="big">$120</p>

                      <span class="text-strike"> $ 150 </span>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 wow-outer">
                <div class="wow fadeInUp">
                  <div class="product-featured">
                    <div class="product-featured-figure"><img src="{{ asset('site/images/product-3-370x395.jpg') }}" alt="" width="370" height="395"/>
                      <div class="product-featured-button"><a class="button button-primary" href="#">Pedi el tuyo!</a></div>
                    </div>
                    <div class="product-featured-caption">
                      <h4><a class="font-family-base product-featured-title" href="#">Clarito con corte</a></h4>
                      
                      <p class="big">$850</p>

                      <span class="text-strike"> $ 1000 </span>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<br><br>

  </div> <!-- Gray Background ends -->


@endsection