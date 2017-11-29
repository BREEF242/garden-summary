<!DOCTYPE html>
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">
	<!--<![endif]-->

  <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110390109-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-110390109-3');
    </script>
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
                    <a href="/"><img id="logo_img" src="{{cloudinary('c_scale,w_100/v1511446095/misc/breef_logo')}}.png" alt="BREEF Sculpture Garden"></a>
                  </div>

                </div>

              </div>
              <div class="col-lg-8 col-xl-9">
                <div class="header-second clearfix">

                  <div class="main-navigation  animated">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                      <div class="navbar-brand clearfix hidden-lg-up">
                        <div id="logo-mobile" class="logo">
                          <a href="/"><img id="logo-img-mobile" src="{{cloudinary('c_scale,w_100/v1511446095/misc/breef_logo')}}.png" alt="BREEF Sculpture Garden"></a>
                        </div>
                      </div>
                      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse scrollspy" id="navbar-collapse-1">
                        <!-- main-menu -->
                        <ul id="fullpage-menu" class="navbar-nav ml-lg-auto">
                          <li data-menuanchor="front" class="nav-item active"><a title="Introduction to the BREEF Sir Nicholas Nuttall Coral Reef Sculpture Garden" href="#front" class="nav-link smooth-scroll">Intro</a></li>
                          <li data-menuanchor="why" class="nav-item"><a title="Why BREEF created the tropical sculpture garden to preserve Bahamian coral" href="#why" class="nav-link smooth-scroll active">Why?</a></li>
                          <li data-menuanchor="art" class="nav-item"><a title="Underwater art exhibits at the Coral Sculpture Garden" class="nav-link smooth-scroll" href="#art">Art</a></li>
                          <li data-menuanchor="press" class="nav-item"><a title="Media coverage received by BREEF for the world's largest underwater sculpture" class="nav-link smooth-scroll" href="#press">Press</a></li>
                          <li data-menuanchor="photos" class="nav-item"><a title="Photos of the underwater coral sculpture taken by staff and visitors" class="nav-link smooth-scroll" href="#photos">Photos</a></li>
                          <li data-menuanchor="visit" class="nav-item"><a title="Visit the underwater coral sculpture in Nassau as a school or tourist" class="nav-link smooth-scroll" href="#visit">Visit</a></li>
                          <li data-menuanchor="breef" class="nav-item"><a title="About the Bahamas Reef Environment Education Foundation (BREEF)" class="nav-link smooth-scroll" href="#breef">BREEF</a></li>
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
