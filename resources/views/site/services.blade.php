@extends('site.layouts.app')
@section('body')

      <section class="parallax-container overlay-1" data-parallax-img="{{ asset('site/images/breadcrumbs4.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Servicios</h2>
                <ul class="breadcrumbs-custom-path">
                  <li><a href="{{ route('home') }}">Inicio</a></li>
                  <li class="active">Servicios</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Our Restaurant Menu section -->
      <section class="section section-lg bg-gray-1">
        <div class="container">
          {{-- <h2 class="text-center">Servicios</h2> --}}
          <div class="row">
            <div class="col-12">
              <div class="tabs-custom " id="tabs-1">
                <ul class="nav nav-tabs nav-tabs-classic">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Cortes</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Tintura</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Productos</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-1-1">
                     <div {{--class="box-event-modern"--}}> 
                     <br>
                    <div class="card bg-light" > {{-- CARD WITH IMAGE --}}
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="{{ asset('site/images/product-1-370x395.jpg') }}" class="card-img">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <div class="event-item-modern">
                              <a href="#" class="d-none d-lg-block d-md-block float-md-right btn btn-primary">Reservar</a>
                              <h4 class="event-item-modern-title"><a href="#" class="font-family-base">Clásico | Afeitadora - Navaja </a></h4>
                              <span>30 minutos </span><span class="icon mdi mdi-chevron-right"></span><span class="event-time"> $300</span>
                              <div class="event-item-modern-text">
                                <p class="d-md-none d-lg-block">Corte clásico o con afeitadora o navaja.<br> Incluye corte clásico a tijera, corte degradado con maquina o afeitadora, cortes texturados.</p>
                              </div>
                            </div>
                          </div>
                          <div class="d-md-none container text-center" >
                            <a href="#" class="btn btn-primary">Reservar</a>
                          </div> 
                          <br>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="card bg-light" > {{-- CARD WITH IMAGE --}}
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="{{ asset('site/images/product-1-370x395.jpg') }}" class="card-img">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <div class="event-item-modern">
                              <a href="#" class="d-none d-lg-block d-md-block float-md-right btn btn-primary">Reservar</a>
                              <h4 class="event-item-modern-title"><a href="#" class="font-family-base">Clásico | Afeitadora - Navaja + Ceja</a></h4>
                              <span>45 minutos </span><span class="icon mdi mdi-chevron-right"></span><span class="event-time"> $330</span>
                              <div class="event-item-modern-text">
                                <p class="d-md-none d-lg-block">Incluye corte clásico a tijera, corte degradado con maquina o afeitadora, cortes texturados + corte de ceja.</p>
                              </div>
                            </div>
                          </div>
                          <div class="d-md-none container text-center" >
                            <a href="#" class="btn btn-primary">Reservar</a>
                          </div> 
                          <br>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="card bg-light" > {{-- CARD WITH IMAGE --}}
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="{{ asset('site/images/product-1-370x395.jpg') }}" class="card-img">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <div class="event-item-modern">
                              <a href="#" class="d-none d-lg-block d-md-block float-md-right btn btn-primary">Reservar</a>
                              <h4 class="event-item-modern-title"><a href="#" class="font-family-base">Z Premium</a></h4>
                              <span>45 minutos </span><span class="icon mdi mdi-chevron-right"></span><span class="event-time"> $400</span>
                              <div class="event-item-modern-text">
                                <p class="d-md-none d-lg-block">Corte hombre con afeitadora/navaja (opcional) + barba.</p>
                              </div>
                            </div>
                          </div>
                          <div class="d-md-none container text-center" >
                            <a href="#" class="btn btn-primary">Reservar</a>
                          </div> 
                          <br>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="card bg-light" > {{-- CARD WITH IMAGE --}}
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="{{ asset('site/images/product-1-370x395.jpg') }}" class="card-img">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <div class="event-item-modern">
                              <a href="#" class="d-none d-lg-block d-md-block float-md-right btn btn-primary">Reservar</a>
                              <h4 class="event-item-modern-title"><a href="#" class="font-family-base">Barba</a></h4>
                              <span>45 minutos </span><span class="icon mdi mdi-chevron-right"></span><span class="event-time"> $150</span>
                              <div class="event-item-modern-text">
                                <p class="d-md-none d-lg-block">Incluye recorte de barba y bigote, perfilado de ambos. <br>Puede ser con maquina, navaja y afeitadora.</p>
                              </div>
                            </div>
                          </div>
                          <div class="d-md-none container text-center" >
                            <a href="#" class="btn btn-primary">Reservar</a>
                          </div> 
                          <br>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="card bg-light" > {{-- CARD WITH IMAGE --}}
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="{{ asset('site/images/product-1-370x395.jpg') }}" class="card-img">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <div class="event-item-modern">
                              <a href="#" class="d-none d-lg-block d-md-block float-md-right btn btn-primary">Reservar</a>
                              <h4 class="event-item-modern-title"><a href="#" class="font-family-base">Corte de Ceja</a></h4>
                              <span>15 minutos </span><span class="icon mdi mdi-chevron-right"></span><span class="event-time"> $30</span>
                              <div class="event-item-modern-text">
                                <p class="d-md-none d-lg-block">Corte de ceja detallado.</p>
                              </div>
                            </div>
                          </div>
                          <div class="d-md-none container text-center" >
                            <a href="#" class="btn btn-primary">Reservar</a>
                          </div> 
                          <br>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="card bg-light" > {{-- CARD WITH IMAGE --}}
                      <div class="row no-gutters">
                        <div class="col-md-3">
                          <img src="{{ asset('site/images/product-1-370x395.jpg') }}" class="card-img">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <div class="event-item-modern">
                              <a href="#" class="d-none d-lg-block d-md-block float-md-right btn btn-primary">Reservar</a>
                              <h4 class="event-item-modern-title"><a href="#" class="font-family-base">Lavado de cabeza</a></h4>
                              <span>15 minutos </span><span class="icon mdi mdi-chevron-right"></span><span class="event-time"> $50</span>
                              <div class="event-item-modern-text">
                              </div>
                            </div>
                          </div>
                          <div class="d-md-none container text-center" >
                            <a href="#" class="btn btn-primary">Reservar</a>
                          </div> 
                          <br>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="tabs-1-2">
                    <div {{-- class="box-event-modern" --}}>
                      <br>
                      <div class="card bg-light" > {{-- CARD WITH IMAGE --}}
                        <div class="row no-gutters">
                          <div class="col-md-3">
                            <img src="{{ asset('site/images/product-3-370x395.jpg') }}" class="card-img">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <div class="event-item-modern">
                                <a href="#" class="d-none d-lg-block d-md-block float-md-right btn btn-primary">Reservar</a>
                                <h4 class="event-item-modern-title"><a href="#" class="font-family-base">Clarito con corte</a></h4>
                                <span>2 horas </span><span class="icon mdi mdi-chevron-right"></span><span class="event-time"> $1000</span>
                                <div class="event-item-modern-text">
                                  
                                </div>
                              </div>
                            </div>
                            <div class="d-md-none container text-center" >
                              <a href="#" class="btn btn-primary">Reservar</a>
                            </div> 
                            <br>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="card bg-light" > {{-- CARD WITH IMAGE --}}
                        <div class="row no-gutters">
                          <div class="col-md-3">
                            <img src="{{ asset('site/images/product-3-370x395.jpg') }}" class="card-img">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <div class="event-item-modern">
                                <a href="#" class="d-none d-lg-block d-md-block float-md-right btn btn-primary">Reservar</a>
                                <h4 class="event-item-modern-title"><a href="#" class="font-family-base">Look platinado</a></h4>
                                <span>2 horas 30 minutos </span><span class="icon mdi mdi-chevron-right"></span><span class="event-time"> $1300</span>
                                <div class="event-item-modern-text">
                                  
                                </div>
                              </div>
                            </div>
                            <div class="d-md-none container text-center" >
                              <a href="#" class="btn btn-primary">Reservar</a>
                            </div> 
                            <br>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="card bg-light" > {{-- CARD WITH IMAGE --}}
                        <div class="row no-gutters">
                          <div class="col-md-3">
                            <img src="{{ asset('site/images/product-3-370x395.jpg') }}" class="card-img">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <div class="event-item-modern">
                                <a href="#" class="d-none d-lg-block d-md-block float-md-right btn btn-primary">Reservar</a>
                                <h4 class="event-item-modern-title"><a href="#" class="font-family-base">Look platinado con corte</a></h4>
                                <span>2 horas 45 minutos </span><span class="icon mdi mdi-chevron-right"></span><span class="event-time"> $1500</span>
                                <div class="event-item-modern-text">
                                  
                                </div>
                              </div>
                            </div>
                            <div class="d-md-none container text-center" >
                              <a href="#" class="btn btn-primary">Reservar</a>
                            </div> 
                            <br>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="tabs-1-3">
                    <div {{-- class="box-event-modern" --}}>
                      <br>
                      <div class="card bg-light" > {{-- CARD WITH IMAGE --}}
                        <div class="row no-gutters">
                          <div class="col-md-3">
                            <img src="https://scontent.fmdq1-1.fna.fbcdn.net/v/t45.5328-0/p180x540/106064355_4667886776570591_2694174920829954467_n.jpg?_nc_cat=108&_nc_sid=c48759&_nc_ohc=oD98dgASknUAX_H0_Os&_nc_ht=scontent.fmdq1-1.fna&_nc_tp=6&oh=9c3dff2513ad08d1cb21f2689296348e&oe=5F4EAD6E" class="card-img">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <div class="event-item-modern">
                                <a href="#" class="d-none d-lg-block d-md-block float-md-right btn btn-primary">Comprar</a>
                                <h4 class="event-item-modern-title"><a href="#" class="font-family-base">Cera fijadora</a></h4>
                                <span class="icon mdi mdi-chevron-right"></span><span class="event-time"> $400</span>
                                <div class="event-item-modern-text">
                                  <p class="d-md-none d-lg-block">Ceras aromatizadas fijadoras de 30grs y 60grs. <br>Contamos con varios aromas: - Maracuyá - Limón - Sandía - Frutos Rojos.</p>
                                </div>
                              </div>
                            </div>
                            <div class="d-md-none container text-center" >
                              <a href="#" class="btn btn-primary">Comprar</a>
                            </div> 
                            <br>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="card bg-light" > {{-- CARD WITH IMAGE --}}
                        <div class="row no-gutters">
                          <div class="col-md-3">
                            <img src="https://scontent.fmdq1-1.fna.fbcdn.net/v/t45.5328-4/p960x960/106868502_3300340609996911_4042594323332332574_n.jpg?_nc_cat=111&_nc_sid=c48759&_nc_ohc=54Eehc5kM3cAX889M00&_nc_ht=scontent.fmdq1-1.fna&_nc_tp=6&oh=9b7259c685ee978328517cef1ae1858d&oe=5F4D73B8" class="card-img">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <div class="event-item-modern">
                                <a href="#" class="d-none d-lg-block d-md-block float-md-right btn btn-primary">Comprar</a>
                                <h4 class="event-item-modern-title"><a href="#" class="font-family-base">Aceite para Barba</a></h4>
                                <span class="icon mdi mdi-chevron-right"></span><span class="event-time"> $350</span>
                                <div class="event-item-modern-text">
                                  <p class="d-md-none d-lg-block">Suaviza, hidrata la piel debajo, reduce la irritación y la fortalece permitiendo un crecimiento saludable de la barba, dejando un aroma muy delicioso durante todo el día.</p>
                                </div>
                              </div>
                            </div>
                            <div class="d-md-none container text-center" >
                              <a href="#" class="btn btn-primary">Comprar</a>
                            </div> 
                            <br>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="card bg-light" > {{-- CARD WITH IMAGE --}}
                        <div class="row no-gutters">
                          <div class="col-md-3">
                            <img src="https://scontent.fmdq1-1.fna.fbcdn.net/v/t45.5328-4/100764535_3190533757675634_5808228477907763200_n.jpg?_nc_cat=102&_nc_sid=c48759&_nc_ohc=wW1FROfz6F8AX9_DGpJ&_nc_oc=AQlJq0nfOsyfM-GE3XqVzHwLCCEbSDep_ANGDcudwHW4x3bUbcOYaqnWpgZunDFi6s8&_nc_ht=scontent.fmdq1-1.fna&oh=f326b6703d5bd9025cee4490bbe44e4c&oe=5F4EE5C8" class="card-img">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <div class="event-item-modern">
                                <a href="#" class="d-none d-lg-block d-md-block float-md-right btn btn-primary">Comprar</a>
                                <h4 class="event-item-modern-title"><a href="#" class="font-family-base">Shampoo ANTI-AGE</a></h4>
                                <span class="icon mdi mdi-chevron-right"></span><span class="event-time"> $500</span>
                                <div class="event-item-modern-text">
                                  <p class="d-md-none d-lg-block">Contiene ORTIGA+, su uso diario mejora la circulación sanguínea del cuero cabelludo tonificando y fortaleciendo la fibra capilar. <br>Gracias a su componente antioxidante , PANTENOL, recupera la elasticidad del cabello previniendo el envejecimiento prematuro de la fibra capilar. </p>
                                </div>
                              </div>
                            </div>
                            <div class="d-md-none container text-center" >
                              <a href="#" class="btn btn-primary">Comprar</a>
                            </div> 
                            <br>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 


@endsection
