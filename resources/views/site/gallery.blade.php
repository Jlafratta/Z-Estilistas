@extends('layouts.site')

@section('body')

<section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
  <div class="main-bunner-img" style="background: rgb(0,0,0);
                                      background: linear-gradient(180deg, rgba(0,0,0,1) 6%, rgba(0,0,0,0.6222864145658263) 20%, rgba(108,108,108,0) 44%, rgba(255,255,255,0) 95%),  url(&quot;{{ asset('site/images/bg-bunner-1.jpg') }}&quot;);
                                      
                                      background-size: cover;"></div>
  <div class="main-bunner-inner">
    <div class="container">
      <div class="box-default">
        <h1 class="box-default-title thin-title">Galeria</h1>
        <div class="box-default-decor"></div>
      </div>
    </div>
  </div>
</section>

{{-- <section class="parallax-container overlay-1" data-parallax-img="images/breadcrumbs.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark"> 
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-9">
            <h2 class="breadcrumbs-custom-title">Galeria</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ route('home') }}">Inicio</a></li>
              <li class="active">Galeria</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- Isotope gallery section -->
      <section class="section">
        <div class="row isotope-wrap">
          <!-- Isotope Content-->
          <div class="col-lg-12">
            <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group" data-lg-thumbnail="false">
              <div class="row no-gutters row-condensed">
                <div class="col-12 col-sm-6 col-md-4 isotope-item wow-outer" data-filter="*">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="{{ asset('site/images/gallery-masonry-1-640x429.jpg') }}" alt="" width="640" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="{{ asset('site/images/gallery-masonry-1-original.jpg') }}" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 isotope-item wow-outer" data-filter="Category 3">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="{{ asset('site/images/gallery-masonry-2-640x429.jpg') }}" alt="" width="640" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="{{ asset('site/images/gallery-masonry-2-original.jpg') }}" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 isotope-item wow-outer" data-filter="Category 3">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="{{ asset('site/images/gallery-masonry-3-640x429.jpg') }}" alt="" width="640" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="{{ asset('site/images/gallery-masonry-3-original.jpg') }}" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 isotope-item wow-outer" data-filter="Category 3">
                  <div class="wow fadeInUp">
                    <div class="gallery-item-classic"><img src="{{ asset('site/images/gallery-masonry-4-960x429.jpg') }}" alt="" width="960" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="{{ asset('site/images/gallery-masonry-4-original.jpg') }}" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 isotope-item wow-outer" data-filter="Category 2">
                  <div class="wow fadeInUp">
                    <div class="gallery-item-classic"><img src="{{ asset('site/images/gallery-masonry-5-960x429.jpg') }}" alt="" width="960" height="429"/>
                      <div class="gallery-item-classic-caption"><a href="{{ asset('site/images/gallery-masonry-5-original.jpg') }}" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 

@endsection