<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="{{ asset('theme/favicon.ico')}}" type="image/x-icon" />
    <link href="{{ asset('/theme/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!--[if IE]>
      <script src="assets/js/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <noscript>
      <div id="jqcheck">
        <img
          src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB60lEQVQ4T2NkwAHePzrxf3ebL1jWp/0oA5egGiM2pVgFQQq31uj/N/ANZvj+8T3D7aNHGDwbTxNvwKtbO/9f3dLHYJ+axfDn5w+GI/NnMRhFtTEISJtjGIIh8Pv39/87ak0ZzCLiGMRUNMCufnLxDMOlrZsY3JtOMrCwsKPowTDg3tGZ/59f2sVgFRvPkO+bAzZgwsZJDEcXzWNQtIlikDGIwG3Az+9v/+9qsGOwTc1h4JeQhhswcfMUhrcP7zEcXzyXwb3xMAMbuwDcEBTTzi7P/s/M8IFB3zccbDPMBSADQODs2sUMzFwyDIah/ZgGfHt/7/+BvmAGm+RsBl4RMawGfHr5jOHowlkMjiUbGDj55MCGwE060Of1X0RZi0Hb2Q4e3eguAElc2X2A4e2DmwwOhVsRBnx6cfH/yXm5DFZxyQxcAoJ4Dfj24T3DsUVzGcwSJjLwSxkygk3ZVmv4X805gkHZRBNXwkQRv3/+NsP1nUsYvFvOMzI+PLXo/73DSxgsouIYOHj5UBRi8wJIwY8vnxlOLV/CIGcewsC4vkDhv01yLoOIoiqG7bgMACn88Owxw8HpvQyMGwqV/vs19TMwQnxDEthYW8DAeGCC3/9XN46TpBGmWEzDkoHx06dP/z9//kyWAby8vAwAcza2SBMOSCMAAAAASUVORK5CYII="
          alt="No Script"
        />
        Javascript is disabled. Please enable it for better working experience.
      </div>
    </noscript>
    <div class="mobile-nav">
      <a href="/" class="logo-main">
        <img src="{{ asset('theme/assets/images/logo.png')}}" alt="*"
      /></a>
      <nav>
        <ul class="unstyled mainnav pbpx-15">
          <li><a href="">Home</a></li>
          <li>
            <a href="javascript:;"
              >About <i class="xicon icon-angle-down"></i
            ></a>
            <ul class="firstlevel unstyled">
              <li><a href="about.html">Tables</a></li>
              <li><a href="hover-boxes.html">Hover Boxes</a></li>
              <li><a href="sidebar.html">Sidebar</a></li>
            </ul>
          </li>
          <li>
            <a href="javascript:;"
              >Sliders<i class="xicon icon-angle-down"></i
            ></a>
            <ul class="firstlevel unstyled">
              <li><a href="javascript:;">drop level 1</a></li>
              <li><a href="javascript:;">drop level 1</a></li>
              <li><a href="javascript:;">drop level 1</a></li>
            </ul>
          </li>
          <li><a href="accordion.html">Accordion</a></li>
          <li><a href="tabs.html">Tabs</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="contact-us.html">Contact Us</a></li>
        </ul>
      </nav>
    </div>
    <main class="app-container">
      <!-- Mobile Navigation Button Start-->
      <div class="mobile-nav-btn"><span class="lines"></span></div>
      <!-- Mobile Navigation Button End-->

      <!-- header_begin -->
      <header class="header-main">
        <div class="nav-area-full">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 logo">
                <a href="/"
                  ><img class="img-fluid" src="{{ asset('theme/assets/images/logo.png')}}" alt="*"
                /></a>
              </div>
              <div class="col-lg-6">
                <ul class="navigation">
                  <li><a href="/">Home</a></li>
                  <li><a href="{{ url('/about-us')}}">About</a></li>
                  <li><a href="{{ url('/product')}}">Products</a></li>
                  <li><a href="{{ url('/blog')}}">Blogs</a></li>
                  <li><a href="{{ url('/contact-us')}}">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <ul class="search_bar">
                  <li>
                    <a href=""><i class="bx bx-shopping-bag"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="bx bx-search"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- header_end-->



  @yield("content")












	       <!-- Footer-section-begin -->
		   <section class="footer" id="sectionfive">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="ftr-detail socail_icons ">
              <img src="{{ asset('theme/assets/images/logo.png')}}">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's</p>
                <ul >
                  <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                  <li><a href="#"><i class='bx bxl-linkedin' ></i></a></li>
                  <li><a href="#"><i class='bx bxl-google-plus' ></i></a></li>
                  <li><a href="#"><i class='bx bxl-twitter' ></i></a></li>
                </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="ftr-detail">
              <h4>navigation</h4>
              <ul>
			 	   <li><a href="/">Home</a></li>
                  <li><a href="{{ url('/about-us')}}">About</a></li>
                  <li><a href="{{ url('/product')}}">Products</a></li>
                  <li><a href="{{ url('/blog')}}">Blogs</a></li>
                  <li><a href="{{ url('/contact-us')}}">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="ftr-detail">
              <h4>quick link</h4>
              <ul>
                <li><a href="javascript:;">Lorem ipsum</a></li>
                <li><a href="javascript:;">Lorem ipsum</a></li>
                <li><a href="javascript:;">Lorem ipsum</a></li>
                <li><a href="javascript:;">Lorem ipsum</a></li>
                <li><a href="javascript:;">Lorem ipsum</a></li>
                <li><a href="javascript:;">Lorem ipsum</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="ftr-detail">
              <h4>contacts</h4>
              <ul>
                <li><a href="javascript:;">Lorem ipsum</a></li>
                <li><a href="javascript:;">Lorem ipsum</a></li>
                <li><a href="javascript:;">Lorem ipsum</a></li>
                <li><a href="javascript:;">Lorem ipsum</a></li>
                <li><a href="javascript:;">Lorem ipsum</a></li>
                <li><a href="javascript:;">Lorem ipsum</a></li>
              </ul>
            </div>
          </div>
          <div class="copy_right">
            <p>Copyright © 2023 Company Name  All Rights Reserved</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-section-end -->




    </main>
    <script src="{{ asset('theme/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/slick.js')}}"></script>
    <script
      type="text/javascript"
      src="{{ asset('theme/assets/js/jquery.fancybox.min.js')}}"
    ></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/wow.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/functions.js')}}"></script>

    <!-- scroll top car
<div class="car-top"><span>
<img src="assets/images/car.png" alt="Top" title="Back to top" />
</span></div>
-->
  </body>
</html>