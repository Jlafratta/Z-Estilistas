@extends('site.layouts.app')

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

{{--   
  <!-- Base typography -->
  <section class="section section-lg bg-default">
    <div class="container">
      <div class="row row-50 flex-lg-row-reverse justify-content-xl-between">
        <div class="col-xl-4">
          <div class="block-bordered-left">
            <div class="row row-40">
              <div class="col-sm-6 col-xl-12">
                <h5 class="thin-title">Fonts</h5>
                <h2 class="heading-font text-accent-3">henric</h2>
                <h3 class="heading-font font-family-base">Poppins</h3>
                <h2 class="heading-font text-accent-2">Tuesday </h2>
              </div>
              <div class="col-sm-6 col-xl-12">
                <h5 class="thin-title">Colors</h5>
                <ul class="list-color">
                  <li>
                    <div class="box-color bg-primary"></div>
                  </li>
                  <li>
                    <div class="box-color bg-pink"></div>
                  </li>
                  <li>
                    <div class="box-color bg-secondary"></div>
                  </li>
                  <li>
                    <div class="box-color bg-green"></div>
                  </li>
                  <li>
                    <div class="box-color bg-secondary-2"></div>
                  </li>
                  <li>
                    <div class="box-color bg-gray-800"></div>
                  </li>
                  <li>
                    <div class="box-color bg-gray-400"></div>
                  </li>
                  <li>
                    <div class="box-color bg-gray-300"></div>
                  </li>
                  <li>
                    <div class="box-color bg-gray-600"></div>
                  </li>
                  <li>
                    <div class="box-color bg-gray-700"></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-7">
          <ul class="list-xxl heading-list">
            <li>
              <h1>H1 Heading</h1>
              <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </li>
            <li>
              <h2>H2 Heading</h2>
              <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </li>
            <li>
              <h3>H3 Heading</h3>
              <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </li>
            <li>
              <h4>H4 Heading</h4>
              <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </li>
            <li>
              <h5>H5 Heading</h5>
              <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </li>
            <li>
              <h6>H6 Heading</h6>
              <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- HTML Text Elements-->
  <section class="section section-lg bg-default">
    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <h3>HTML Text Elements</h3>
          <p class="text-block">Welcome to our wonderful world. <span class="text-bold">This is a bold text </span>
            <mark>This is a highlighted text</mark>We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. <span>With advanced features of activating account and new login</span><span class="tooltip-custom" data-toggle="tooltip" data-placement="top" title="Tooltips">Tooltips</span><span>widgets, you will definitely have a great experience of using our web page.</span><span class="text-strike">This is a strickethrough text </span><span class="text-underline">This is an underlined text.</span><a class="link-hover" href="#">Hover link</a><a class="link-active" href="#">Press link</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Unordered List-->
  <section class="section section-lg bg-default">
    <div class="container">
      <div class="row row-50">
        <div class="col-lg-6">
          <h3>Ordered & Unordered Lists</h3>
          <div class="row row-50">
            <div class="col-sm-6">
              <ul class="list-marked">
                <li>High Professionalism</li>
                <li>Customer Service</li>
                <li>Innovation</li>
                <li>Ethics</li>
                <li>Management</li>
              </ul>
            </div>
            <div class="col-sm-6">
              <ol class="list-ordered">
                <li>High Professionalism</li>
                <li>Customer Service</li>
                <li>Innovation</li>
                <li>Ethics</li>
                <li>Management</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blockquote-->
  <section class="section section-lg bg-default">
    <div class="container">
      <div class="row row-50">
        <div class="col-lg-10 col-xl-8">
          <h3>Blockquote</h3>
          <!-- Quote Primary-->
          <article class="quote-primary">
            <div class="quote-primary-body">
              <div class="quote-primary-text">
                <p class="q">Morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, tristique senectus et netus et malesuada fames ac turpis egestas</p>
              </div>
            </div>
            <div class="quote-primary-footer">
              <div class="bg-dot"></div>
              <p class="quote-primary-cite">Jane Smith</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section> --}}

@endsection