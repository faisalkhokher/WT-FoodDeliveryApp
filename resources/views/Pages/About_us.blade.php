<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<!-- Mirrored from market.spidersx.com/Avocada/en/About by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jul 2021 08:50:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
 <!-- ===================================== Meta site ================================================ -->
 <meta charset="utf-8">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
 <!-- ====== Laravel description site edit delete from admin panel ================== -->
 <meta name="description" content="Avocada - Food Delivery Restaurant Directory and Online Ordering script Template">
 <!-- ====== Laravel author site edit delete from admin panel ====================== -->
 <meta name="author" content="author">
 <!-- ====== Laravel keywords site edit delete from admin panel ================== -->
 <meta name="keywords" content="Avocada - Food Delivery Restaurant Directory and Online Ordering script Template">  
 <!-- ====== Laravel robots site edit delete from admin panel ================== -->
 <meta name="robots" content="Metarobots">
 <meta name="msapplication-TileColor" content="#ffffff">
 <meta name="msapplication-TileImage" content="https://market.spidersx.com/Cardealer/en">
 <meta name="theme-color" content="#ffffff">
 <!-- TWITTER META -->
 <meta name="twitter:card" content="summary">
 <meta name="twitter:site" content="@Avocada  - Food Delivery">
 <meta name="twitter:creator" content="@Avocada  - Food Delivery">
 <meta name="twitter:title" content="Avocada - Food Delivery">
 <meta name="twitter:description" content="Avocada - Food Delivery">
 <!-- ====== Laravel favicon icon ================== -->
 <link rel="apple-touch-icon" sizes="57x57" href="../images/images/apple-icon-57x57.png">
 <link rel="apple-touch-icon" sizes="60x60" href="../images/images/apple-icon-60x60.png">
 <link rel="apple-touch-icon" sizes="72x72" href="../images/images/apple-icon-72x72.png">
 <link rel="apple-touch-icon" sizes="76x76" href="../images/images/apple-icon-76x76.png">
 <link rel="apple-touch-icon" sizes="114x114" href="../images/images/apple-icon-114x114.png">
 <link rel="apple-touch-icon" sizes="120x120" href="../images/images/apple-icon-120x120.png">
 <link rel="apple-touch-icon" sizes="144x144" href="../images/images/apple-icon-144x144.png">
 <link rel="apple-touch-icon" sizes="152x152" href="../images/images/apple-icon-152x152.png">
 <link rel="apple-touch-icon" sizes="180x180" href="../images/images/apple-icon-180x180.png">
 <link rel="icon" type="image/png" sizes="192x192"  href="../images/images/android-icon-192x192.png">
 <link rel="icon" type="image/png" sizes="32x32" href="../images/images/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="96x96" href="../images/images/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="16x16" href="../images/images/favicon-32x32.png">
 <link rel="manifest" href="../images/images/manifest.json">
 <!-- ====== SiteTitle ========================================================================== -->
 <title>Avocada</title>
 <!-- ===========================================  googleapis =================================== -->
 <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600&amp;display=swap" rel="stylesheet"> 
 <!-- ===========================================  googleapis =================================== -->
 <link href="https://fonts.googleapis.com/css?family=Righteous&amp;display=swap" rel="stylesheet">
 <!-- ===========================================  googleapis =================================== -->
 <link href="https://fonts.googleapis.com/css2?family=Lalezar&amp;display=swap" rel="stylesheet">
 <!-- ===========================================  main =================================== -->
 <link rel="stylesheet" type="text/css" href="{{ asset('/cs/main.css') }}" />
 <!-- ===========================================  uikit ============================== -->
 <script src="{{ asset('/js/uikit.js') }}"></script>
 <!-- ===========================================  uikit icons ============================== -->
 <script src="{{ asset('/js/uikit-icons.js') }}"></script> 
 <!-- ===========================================  head =================================== -->
 <span class="display-zero">en</span>
  </head>
<body> 
  <!-- ===========================================  content =================================== -->
  <nav class="uk-navbar-container uk-letter-spacing-small">
    <div class="uk-container uk-container-xlarge">
      <div class="uk-position-z-index" data-uk-navbar>
        <div class="uk-navbar-left">
          <!-- ===========================================  content =================================== -->
          <a class="uk-navbar-item uk-logo" href="{{route('layouts.frontend')}}">
            <img alt="Avocada" src="../images/images/logo.png">
          </a>
          <ul class="uk-navbar-nav uk-visible@m uk-margin-large-left">
                        <li>
             <a href="{{route('layouts.frontend')}}" target="_blank">
              Home
            </a>
          </li>
                      <li>
             <a href="{{route('Pages.About_us')}}" target="_self">
              About Us
            </a>
          </li>
                      <li>
             <a href="{{route('Pages.Contact_us')}}" target="_self">
              Contact Us
            </a>
          </li>
                    <li><a type="button"> Upcoming Food<span class="uk-label uk-label-success uk-label-menu">Pro</span></a></li>
          <div uk-dropdown>
            <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="{{route('Pages.Pizza')}}">Pizza</a></li>
                            <li><a href="{{route('Pages.Noodles')}}">Noodles</a></li>
                            <li><a href="{{route('Pages.Hamburger')}}">Hamburger</a></li>
                            <li><a href="{{route('Pages.Juice')}}">juice</a></li>
                            <li><a href="{{route('Pages.Cupcake')}}">Cupcake</a></li>
                          </ul>
          </div>
          <!-- ===========================================  content =================================== -->
        </ul>
      </div>
      <!-- ===========================================  content =================================== -->
      <div class="uk-navbar-right uk-margin-small-right">
                <ul class="uk-thumbnav">
          <li>
            <a type="button">
              <img class="uk-comment-avatar uk-border-rounded" src="../images/images/avatar.png" alt="avatar" width="40" height="40">
            </a>
          </li>
        </ul>
        <div uk-dropdown="mode: click ;pos: bottom-right">
          <ul class="uk-nav uk-dropdown-nav">
            <li><a href="{{route('Auth.Login')}}"><span uk-icon="sign-in"></span> Sign In</a></li>
            <li><a href="{{route('Auth.Register')}}"><span uk-icon="user"></span> Sign Up</a></li>
          </ul>
        </div>
              <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span data-uk-navbar-toggle-icon></span></a>
    </div>
  </div>
</div>
</nav>
<!-- ===========================================  content =================================== -->
<!--********************* SITE CONTENT *********************-->
<!--********************************************************-->
<span class="display-zero">en</span>
<!-- ===========================================  content =================================== -->
<div class="uk-section uk-dark uk-background-cover" style="background-image: url('../images/images/breadcrumbs.jpg')">
  <div class="uk-container uk-container-xlarge">
    <h2 class="uk-heading-small">About Us</h2> 
    <ul class="uk-breadcrumb">
      <li class="uk-button uk-button-text"><a href="{{route('layouts.frontend')}}">Home</a></li>
      <li><span>About Us</span></li>
    </ul>          
  </div>
</div>
<!-- ===========================================  content =================================== -->
  <div class="uk-section uk-section-muted">
    <div class="uk-container uk-container-xlarge">
      <div class="uk-child-width-expand" uk-grid>
        <div class="uk-width-1-2">
          <article class="uk-article uk-text-left">
            <p class="uk-article-meta">3 simple reasons for Avocada</p>
            <p class="uk-text-lead">Everything available at all times.</p>
            <p class="uk-color-list">No matter whether ordering food from your favorite Italian or sending a document to the other end of the city - our riders take care of it and time for More important Small errands can be tedious and time-consuming, saving you time for the important things. Our riders allow you better time management in everyday life Environmentally friendly Avoid unnecessary car trips and have our riders deliver everything easily and in an environmentally friendly manner at the push of a button.</p>
            <p class="uk-text-lead">Management you time for the important things.</p>
            <p class="uk-color-list">No matter whether ordering food from your favorite Italian or sending a document to the other end of the city - our riders take care of it and time for More important Small errands can be tedious.</p>
            <hr class="uk-divider-icon">
          </article>
        </div>
        <div class="uk-width-1-2">
         <div class="uk-cover-container uk-height-video uk-border-rounded">
         <video src="https://market.spidersx.com/Avocada/assets/video/video.mp4" loop="" muted="" playsinline="" uk-video="autoplay: inview" preload="none" __idm_id__="976424961"></video>
         </div>
        </div>
      </div>
    </div>
  </div>
<!-- ===========================================  content =================================== -->
<!-- ===========================================  content =================================== -->
<footer class="uk-section uk-dark" style="background-image: url('../images/images/Footer.png');">
  <div class="uk-container uk-container-xlarge  uk-text-500">
    <div class="uk-child-width-1-2@s uk-child-width-1-4@m" data-uk-grid>
    <div>
        <a href="{{route('layouts.frontend')}}" class="uk-logo uk-display-block"><img alt="Avocada" src="../images/images/logo.png"></a>
        <p class="uk-padding-top">
          <a href="https://twitter.com/login?lang=en/" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
          <a href="https://www.facebook.com/" class="uk-icon-button uk-margin-small-right" uk-icon="facebook"></a>
          <a href="http://www.youtube.com/" class="uk-icon-button uk-margin-small-right" uk-icon="youtube"></a>
          <a href="https://www.instagram.com/" class="uk-icon-button uk-margin-small-right" uk-icon="instagram"></a>
        </p>
      </div>
      <div>
        <ul class="uk-list">
          <h3 class="uk-heading">Help</h3>
          <li><a class="uk-button uk-button-text" href="{{route('Pages.About_us')}}">About Us</a></li>
          <li><a class="uk-button uk-button-text" href="{{route('Pages.Contact_us')}}">Contact Us</a></li>
          <li><a class="uk-button uk-button-text" href="{{route('Auth.Login')}}">Sign In</a></li>
          <li><a class="uk-button uk-button-text" href="{{route('Auth.Register')}}">Sign Up</a></li>
        </ul>
      </div>
      <div>
        <ul class="uk-list">
          <h3 class="uk-heading">Categories</h3>
                    <li><a class="uk-button uk-button-text" href="{{route('Pages.Pizza')}}">Pizza</a></li>
                    <li><a class="uk-button uk-button-text" href="{{route('Pages.Noodles')}}">Noodles</a></li>
                    <li><a class="uk-button uk-button-text" href="{{route('Pages.Hamburger')}}">Hamburger</a></li>
                    <li><a class="uk-button uk-button-text" href="{{route('Pages.Juice')}}">juice</a></li>
                  </ul>
      </div>
      <div>
        <ul class="uk-list">
          <h3 class="uk-heading">Our Contact</h3>
          <a class="uk-button uk-link-muted uk-padding-remove-left"><span uk-icon="mail"></span> HelloAvocada@gmail.com</a>
          <a class="uk-button uk-link-muted uk-padding-remove-left uk-bl"><span uk-icon="location"></span>   ERP 2021, United States  </a>
          <a class="uk-button uk-link-muted uk-padding-remove-left"><span uk-icon="phone"></span> 002-99-88-541</a>   
        </ul>
      </div>
    </div>
    <!-- ===========================================  content =================================== -->
    <div class="uk-text-small uk-text-muted uk-margin-medium-top">        
      <div>All rights reserved 2020  Made by a <a class="uk-link-muted" target="_blank">Weanio Technologies</a>
                <a  class="uk-link-muted" rel="alternate" hreflang="en" href="{{route('Pages.About_us')}}">
          English
        </a>
                <a  class="uk-link-muted" rel="alternate" hreflang="fr" href="{{route('Pages.About_us')}}">
          Français
        </a>
                <a  class="uk-link-muted" rel="alternate" hreflang="ar" href="{{route('Pages.About_us')}}">
          العربية
        </a>
        .
        <a href="#" uk-totop uk-scroll></a>
      </div>
    </div>
    <!-- ===========================================  content =================================== -->
  </div>
</footer>
<!-- ===========================================  content =================================== -->
<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="{{route('layouts.frontend')}}">Avocada</a>
    <button class="uk-offcanvas-close" type="button" data-uk-close="ratio: 1.2"></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-medium-top uk-text-center">
          <li>
       <a href="{{route('layouts.frontend')}}" target="_blank">
        Home
      </a>
    </li>
         <li>
       <a href="{{route('Pages.About_us')}}" target="_self">
        About Us
      </a>
    </li>
         <li>
       <a href="{{route('Pages.Contact_us')}}" target="_self">
        Contact Us
      </a>
    </li>
      </ul>
  <div class="uk-margin-medium-top">
    <a class="uk-button uk-width-1-1 uk-button-primary" href="{{route('Auth.Register')}}">Sign Up</a>
  </div>
  <div class="uk-margin-medium-top uk-text-center">
    <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
      <div>
        <a href="https://twitter.com/login?lang=en/" data-uk-icon="icon: twitter" class="uk-icon-link" target="_blank"></a>
      </div>
      <div>
        <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link" target="_blank"></a>
      </div>
      <div>
        <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link" target="_blank"></a>
      </div>
      <div>
        <a href="http://www.youtube.com//" data-uk-icon="icon: youtube" class="uk-icon-link" target="_blank"></a>
      </div>
    </div>
  </div>
</div>
</div>
<!-- ===========================================  content =================================== -->
</body>

<!-- Mirrored from market.spidersx.com/Avocada/en/About by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jul 2021 08:50:59 GMT -->
</html>