<header class="section page-header">
  <!-- RD Navbar-->
  <div class="rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
      <div class="rd-navbar-main-outer">
        <div class="rd-navbar-main">
          <!-- RD Navbar Panel-->
          <div class="rd-navbar-panel d-flex justify-content-between">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand"><a href="{{ route('index') }}"><img class="brand-logo-light" src="{{ asset('site/images/1-70px.svg') }}" alt="Inicio" width="140" height="57" srcset="{{ asset('site/images/1-113px.svg') }} 2x"/></span></a></div>
          </div>
          <div class="rd-navbar-main-element">
            <div class="rd-navbar-nav-wrap">
              <!-- RD Navbar Nav-->
              <ul class="rd-navbar-nav">
                <li class="rd-nav-item <?php if($title =='Inicio'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('index') }}">Inicio</a>
                </li>
                <li class="rd-nav-item <?php if($title =='Quienes somos'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('about-us') }}">Quienes somos</a>
                </li>
                <li class="rd-nav-item <?php if($title =='Servicios'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('services') }}">Servicios</a>
                </li>
                <li class="rd-nav-item <?php if($title =='Galeria'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('gallery') }}">Galeria</a>
                </li>
                <li class="rd-nav-item <?php if($title =='Contacto'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('contact') }}">Contacto</a>
                </li>
              </ul><a class="button button-white button-sm" href="{{ route('login') }}">Ingresar</a>
            </div>
          </div><a class="button button-white button-sm" href="{{ route('login') }}">Ingresar</a>
        </div>
      </div>
    </nav>
  </div>
</header>