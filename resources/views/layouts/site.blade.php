<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 

  <head>
    <title> @yield('title') | Z </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    {{-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> --}}
    <link rel="apple-touch-icon" sizes="57x57" href="images/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>

  <body>
    @yield('body')
  </body>

    <!-- Page Footer-->
    <footer class="section footer-minimal context-dark">
      <div class="container wow-outer">
        <div class="wow fadeIn">
          <div class="row row-60">
            <div class="col-12"><a href="index.html"><img src="images/logo-default1-140x57.png" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
            <div class="col-12">
              <ul class="footer-minimal-nav">
                <li><a href="#">Menu</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="about-us.html">About</a></li>
              </ul>
            </div>
            <div class="col-12">
              <ul class="social-list">
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="#"></a></li>
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="#"></a></li>
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="#"></a></li>
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play" href="#"></a></li>
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-pinterest-p" href="#"></a></li>
              </ul>
            </div>
          </div>
          <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Pesto</span><span>.&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><a href="#">Privacy Policy</a>. Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">Templatemonster</a></p>
        </div>
      </div>
    </footer>

  </div> <!-- page div end -->

  <div class="snackbars" id="form-output-global"></div>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
    
  
</html>