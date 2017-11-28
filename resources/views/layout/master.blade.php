<!DOCTYPE html>
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">
	<!--<![endif]-->

  <head>
    @yield('title')
    @yield('sharing')
    @include('partials.meta')
  </head>


  <body class="transparent-header gradient-background-header front-page full-page">

    <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

    <div class="page-wrapper">
      <!-- header-container start -->
      <div class="header-container">

        <header class="header dark fixed clearfix">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 col-xl-3 hidden-md-down">

                <div class="header-first clearfix">

                  <div id="logo" class="logo">
                    <a href="/"><img id="logo_img" src="http://res.cloudinary.com/breef/image/upload/c_scale,w_100/v1511446095/misc/breef_logo.png" alt="BREEF"></a>
                  </div>


                </div>

              </div>
              <div class="col-lg-8 col-xl-9">
                <div class="header-second clearfix">

                  <div class="main-navigation  animated">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                      <div class="navbar-brand clearfix hidden-lg-up">

                        <!-- logo -->
                        <div id="logo-mobile" class="logo">
                          <a href="/"><img id="logo-img-mobile" src="http://res.cloudinary.com/breef/image/upload/c_scale,w_100/v1511446095/misc/breef_logo.png" alt="BREEF Sculpture Garden"></a>
                        </div>



                      </div>
                      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse scrollspy" id="navbar-collapse-1">
                        <!-- main-menu -->
                        <ul id="fullpage-menu" class="navbar-nav ml-lg-auto">
                          <li data-menuanchor="why" class="nav-item"><a title="" href="#why" class="nav-link smooth-scroll active">WHY?</a></li>
                          <li data-menuanchor="art" class="nav-item"><a title="" class="nav-link smooth-scroll" href="#art">ART</a></li>
                          <li data-menuanchor="press" class="nav-item"><a title="" class="nav-link smooth-scroll" href="#press">PRESS</a></li>
                          <li data-menuanchor="visit" class="nav-item"><a title="" class="nav-link smooth-scroll" href="#visit">VISIT</a></li>
                          <li data-menuanchor="breef" class="nav-item"><a title="" class="nav-link smooth-scroll" href="#breef">BREEF</a></li>
                        </ul>
                        <!-- main-menu end -->
                      </div>
                    </nav>
                  </div>
                  <!-- main-navigation end -->

                </div>
                <!-- header-second end -->

              </div>
            </div>
          </div>
        </header>
        <!-- header end -->
      </div>
      <!-- header-container end -->

      @yield('content')

      @include('partials.bottom_strip')
      <!-- footer end -->
    </div>


    @include('partials.footer_js')

  </body>
</html>
