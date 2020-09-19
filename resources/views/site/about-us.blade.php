@extends('layouts.site')
@section('body')

      <section class="parallax-container overlay-1" data-parallax-img="{{ asset('site/images/breadcrumbs2.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Quienes somos</h2>
                <ul class="breadcrumbs-custom-path">
                  <li><a href="{{ route('index') }}">Inicio</a></li>
                  <li class="active">Quienes somos</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-1">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-6 pr-xl-5"><img src="{{ asset('site/images/about-us-2-518x434.jpg') }}" alt="" width="518" height="434"/>
            </div>
            <div class="col-lg-6">
              <h2 class="heading-font font-family-base">Historia Z</h2>
              <div class="text-with-divider">
                <div class="divider"></div>
                <h4 class="heading-font font-family-base">Deja que tu pelo hable por ti.</h4>
              </div>
              <p>Z abrio sus puertas en el año 2019, con el concepto de dar al cliente una experiencia amigable y personal, de tener un trato de amistad con sus peluquero/as, para que se sientan comodos y tengan la mejor de sus expernecias en Z.</p>
              <p>Sin dejar de lado el detalle, la perfeccion y alta capacitacion de cada uno de sus profesionales.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-white">
        <div class="container">
          <h2 class="text-center heading-font font-family-base">Por que la gente nos elige</h2>
          <div class="row row-30 row-md-60">
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-modern">
                <div class="box-icon-inner decorate-circle"><span class="icon-xl restaurant-icon-30"></span></div>
                
                <div class="box-icon-caption">
                  <h4><a href="#">Compañerismo</a></h4>
                  <p>Somos muy buenos compañeros de trabajo, lo que hace que el ambiente del lugar sea amigable.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-modern">
                <div class="box-icon-inner decorate-circle"><img src="site\fonts\icons\cup.svg" width="250px"></div>
                <div class="box-icon-caption">
                  <h4><a href="#">Fresh Food</a></h4>
                  <p>Cum resistentia mori, omnes elevatuses imperium plac.</p>
                  
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-modern">
                <div class="box-icon-inner decorate-rectangle"><span class="icon-xl restaurant-icon-36"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="#">Sentite como en casa</a></h4>
                  <p>Contamos con cafe, mate, facturas, caramelos, y una variedad increible de cosas mas para que la pases genial mientras esperas para que sea tu turno en Z! Ya que tu espera tambien es importante para nosotros.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-modern">
                <div class="box-icon-inner decorate-circle"><span class="icon-xl restaurant-icon-27"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="#">Best Service</a></h4>
                  <p>Cum onus studere, omnes consiliumes amor plac.</p>
                </div>
              </div>
            </div> 
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-modern">
                <div class="box-icon-inner decorate-triangle"><span class="icon-xl restaurant-icon-34"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="#">Diverse Menu</a></h4>
                  <p>Cum demolitione persuadere, omnes devatioes captis.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-modern">
                <div class="box-icon-inner decorate-triangle"><span class="icon-xl restaurant-icon-34"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="#">Gran calidad</a></h4>
                  <p>Nuestros estilistas estan altamente capacitados para poder brindar el mejor serivicio y poder cumplir con cualquier idea y/o estilo de corte que el cliente deseé.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="parallax-container" data-parallax-img="{{ asset('site/images/parallax-img-4.jpg') }}">
        <div class="parallax-content section-xl context-dark text-center bg-dark-filter bg-dark-filter-2">
          <div class="container">
            <h2 class="heading-font font-family-base">La opinión de los clientes</h2>
            <!-- Slick Carousel-->
            <div class="slick-slider carousel-parent slick-style-1" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
              <div class="item">
                <div class="testimonials-modern">
                  <div class="testimonials-modern-text">
                    <p>A falsis, hibrida peritus fiscina. Devatio de fortis era, talem abaculus! Urbs germanus abnoba est. Pol, a bene exemplar, victrix! Peritus verpas ducunt ad byssus. Cum historia persuadere, omnes decores.</p>
                  </div>
                  <div class="testimonials-modern-name">Joanna Smith</div>
                </div>
              </div>
              <div class="item">
                <div class="testimonials-modern">
                  <div class="testimonials-modern-text">
                    <p>Silvas cadunt in magnum antverpia! Ubi est grandis gabalium? Trabem sapienter ducunt ad dexter hydra. Devatios sunt assimilatios de alter ignigena. Est ferox lapsus, cesaris. Cum abactus tolerare, omnes.</p>
                  </div>
                  <div class="testimonials-modern-name">James Williams</div>
                </div>
              </div>
              <div class="item">
                <div class="testimonials-modern">
                  <div class="testimonials-modern-text">
                    <p>Pius equiso virtualiter promissios fides est. Cur absolutio peregrinatione? Decors congregabo in salvus cubiculum! Raptus, fidelis ventuss etiam prensionem de neuter, audax classis. Domesticus, camerarius aonid.</p>
                  </div>
                  <div class="testimonials-modern-name">Kate McMillan</div>
                </div>
              </div>
              <div class="item">
                <div class="testimonials-modern">
                  <div class="testimonials-modern-text">
                    <p>Danistas sunt cannabiss de brevis domus. Vae, domina! Brodium cresceres, tanquam ferox repressor. Glutens potus, tanquam brevis nuptia. Fraticinida, ionicis tormento, et pars. Cum bromium resistere, omnes.</p>
                  </div>
                  <div class="testimonials-modern-name">Peter Wilson</div>
                </div>
              </div>
            </div>
            <div class="slick-slider slider-dots" id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="4" data-xs-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="4" data-slide-to-scroll="1">
              <div class="item">
                <div class="slick-dot-item"><img src="{{ asset('site/images/user-1-60x60.jpg') }}" alt="" width="60" height="60"/>
                </div>
              </div>
              <div class="item">
                <div class="slick-dot-item"><img src="{{ asset('site/images/user-2-60x60.jpg') }}" alt="" width="60" height="60"/>
                </div>
              </div>
              <div class="item">
                <div class="slick-dot-item"><img src="{{ asset('site/images/user-3-60x60.jpg') }}" alt="" width="60" height="60"/>
                </div>
              </div>
              <div class="item">
                <div class="slick-dot-item"><img src="{{ asset('site/images/user-4-60x60.jpg') }}" alt="" width="60" height="60"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {{-- <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
          <h2 class="heading-font font-family-base">Nuestras certificaciones</h2>
          <div class="row row-30">
            <div class="col-6 col-md-3"><a class="clients-default" href="#"><img src="{{ asset('site/images/clients-1-270x119.png') }}" alt="" width="270" height="119"/></a></div>
            <div class="col-6 col-md-3"><a class="clients-default" href="#"><img src="{{ asset('site/images/clients-2-270x119.png') }}" alt="" width="270" height="119"/></a></div>
            <div class="col-6 col-md-3"><a class="clients-default" href="#"><img src="{{ asset('site/images/clients-3-270x119.png') }}" alt="" width="270" height="119"/></a></div>
            <div class="col-6 col-md-3"><a class="clients-default" href="#"><img src="{{ asset('site/images/clients-4-270x119.png') }}" alt="" width="270" height="119"/></a></div>
          </div>
        </div>
      </section> --}}

@endsection