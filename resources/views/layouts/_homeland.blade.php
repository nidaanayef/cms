
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield("title")</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="{{asset('homeland-master/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('homeland-master/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('homeland-master/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('homeland-master/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('homeland-master/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('homeland-master/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('homeland-master/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('homeland-master/css/mediaelementplayer.css')}}">
    <link rel="stylesheet" href="{{asset('homeland-master/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('homeland-master/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('homeland-master/css/fl-bigmug-line.css')}}">
    
  
    <link rel="stylesheet" href="{{asset('homeland-master/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('homeland-master/css/style.css')}}">
    @yield("css")
  </head>
 <body>
 <div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="{{ asset('/home') }}"  class="text-white h2 mb-0"><strong>Real Estate<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="{{ asset('/home') }}">Home</a>
                  </li>
                  <li><a href="{{ asset('/about') }}">About</a></li>
                  <li><a href="{{ asset('/contact') }}">Contact</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>
    
    @yield("content")
    </div>
    </div>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About Homeland</h3>
              <p>Homeland site specializes in searching for real estate and classification and also allows to communicate with the customer speed and privacy guarantee</p>
            </div>

            
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="{{ asset('/home') }}">Home</a></li>
                  <li><a href="{{ asset('/about') }}">About Us</a></li>
         
    
      
                </ul>
              </div>
           <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                <li><a href="{{ asset('/contact') }}">Contact Us</a></li>
                <li><a href="{{ asset('/realestates') }}">Our Blog</a></li>
           
                </ul>
              </div>
            </div>


          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                  <a href="https://www.facebook.com/" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="https://twitter.com/" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="https://www.instagram.com/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="https://www.linkedin.com/feed/" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>

            

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy; All rights reserved 2019
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="{{asset('homeland-master/js/jquery-3.3.1.min.js')}}"></script>
 <script src="{{asset('homeland-master/js/jquery-migrate-3.0.1.min.js')}}"></script>
  
  <script src="{{asset('homeland-master/js/jquery-ui.js')}}"></script>
  <script src="{{asset('homeland-master/js/popper.min.js')}}"></script>
  <script src="{{asset('homeland-master/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('homeland-master/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('homeland-master/js/mediaelement-and-player.min.js')}}"></script>
  <script src="{{asset('homeland-master/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('homeland-master/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('homeland-master/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('homeland-master/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('homeland-master/js/aos.js')}}"></script>

  <script src="{{asset('homeland-master/js/main.js')}}"></script>
  @yield("js")

  </body>

</html>