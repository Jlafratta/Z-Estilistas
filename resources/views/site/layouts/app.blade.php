<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

  <head>
    <title> {{ $title }} | Z </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('site/images/icon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('site/images/icon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('site/images/icon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('site/images/icon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('site/images/icon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('site/images/icon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('site/images/icon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('site/images/icon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('site/images/icon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('site/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('site/images/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('site/images/icon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('site/images/icon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('site/images/icon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>

    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{ asset('site/images/ie8-panel/warning_bar_0000_us.jpg') }}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>

    <!-- Loading preloader -->
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>

    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a href="{{ route('home') }}"><img class="brand-logo-light" src="{{ asset('site/images/1-70px.svg') }}" alt="" width="140" height="57" srcset="{{ asset('site/images/1-113px.svg') }} 2x"/></span></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item <?php if($title =='Inicio'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('home') }}">Inicio</a>
                      </li>
                      <li class="rd-nav-item <?php if($title =='Quienes somos'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('about-us') }}">Quienes somos</a>
                      </li>
                      <li class="rd-nav-item <?php if($title =='Servicios'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('services') }}">Servicios</a>
                      </li>
                      <li class="rd-nav-item <?php if($title =='Galeria'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('gallery') }}">Galeria</a>
                      </li>
                      <li class="rd-nav-item <?php if($title =='Contacto'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('contact') }}">Contacto</a>
                      </li>
                    </ul>
                  </div>
                </div><a class="button button-white button-sm" href="#">Ingresar</a>
              </div>
            </div>
          </nav>
        </div>
      </header>

  <body>
    @yield('body')
  </body>

    <!-- Page Footer-->
    <footer class="section footer-minimal context-dark">
      <div class="container wow-outer">
        <div class="wow fadeIn">
          <div class="row row-60">
            <div class="col-12"><a href="{{ route('home') }}"><img src="{{ asset('site/images/logo-1.svg') }}" alt="" width="140" height="57" srcset="{{ asset('site/images/logo-1.svg') }} 2x"/></a></div>
            <div class="col-12">
              <ul class="footer-minimal-nav">
                <li class="rd-nav-item <?php if($title =='Inicio'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="rd-nav-item <?php if($title =='Quienes somos'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('about-us') }}">Quienes somos</a>
                </li>
                <li class="rd-nav-item <?php if($title =='Servicios'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('services') }}">Servicios</a>
                </li>
                <li class="rd-nav-item <?php if($title =='Galeria'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('gallery') }}">Galeria</a>
                </li>
                <li class="rd-nav-item <?php if($title =='Contacto'){echo 'active';}?>"><a class="rd-nav-link transicion" href="{{ route('contact') }}">Contacto</a>
                </li>
              </ul>
            </div>
            <div class="col-12">
              <ul class="social-list">
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="https://www.facebook.com/z.estilistas" target="_blank" rel="noopener noreferrer"></a></li>
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="https://www.instagram.com/z.estilistas/" target="_blank" rel="noopener noreferrer"></a></li>
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-whatsapp" href="https://api.whatsapp.com/send?phone=+5492235792912" target="_blank" rel="noopener noreferrer"></a></li>
                {{-- <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play" href="#"></a></li> --}}
                {{-- <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-pinterest-p" href="#"></a></li> --}}
              </ul>
            </div>
          </div>
          <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Z Estilistas</span><span>.&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><a href="#">Privacy Policy</a>.</p>
        </div>
      </div>
    </footer>

  </div> <!-- page div end -->

  <div class="snackbars" id="form-output-global"></div>
  <script src="{{ asset('site/js/core.min.js') }}"></script>
  <script src="{{ asset('site/js/script.js') }}"></script>
  <script>
  $(document).ready(function() {

    $("body").css("display", "none");
    $("body").fadeIn(500);

  $("a.transicion").click(function(event){
    event.preventDefault();
    linkDestino = this.href;
    $("body").fadeOut(500, redireccionarPag);
  });

  function redireccionarPag() {
    window.location = linkDestino;
  }

  });</script>


</html>
