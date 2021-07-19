<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<!-- Mirrored from market.spidersx.com/Avocada/en/Foods/finger-lickin-good by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jul 2021 08:51:43 GMT -->
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
 <link rel="apple-touch-icon" sizes="57x57" href="../../images/images/apple-icon-57x57.png">
 <link rel="apple-touch-icon" sizes="60x60" href="../../images/images/apple-icon-60x60.png">
 <link rel="apple-touch-icon" sizes="72x72" href="../../images/images/apple-icon-72x72.png">
 <link rel="apple-touch-icon" sizes="76x76" href="../../images/images/apple-icon-76x76.png">
 <link rel="apple-touch-icon" sizes="114x114" href="../../images/images/apple-icon-114x114.png">
 <link rel="apple-touch-icon" sizes="120x120" href="../../images/images/apple-icon-120x120.png">
 <link rel="apple-touch-icon" sizes="144x144" href="../../images/images/apple-icon-144x144.png">
 <link rel="apple-touch-icon" sizes="152x152" href="../../images/images/apple-icon-152x152.png">
 <link rel="apple-touch-icon" sizes="180x180" href="../../images/images/apple-icon-180x180.png">
 <link rel="icon" type="image/png" sizes="192x192"  href="../../images/images/android-icon-192x192.png">
 <link rel="icon" type="image/png" sizes="32x32" href="../../images/images/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="96x96" href="../../images/images/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="16x16" href="../../images/images/favicon-32x32.png">
 <link rel="manifest" href="../../images/images/manifest.json">
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
            <img alt="Avocada" src="../../images/images/logo.png">
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
              <img class="uk-comment-avatar uk-border-rounded" src="../../images/images/avatar.png" alt="avatar" width="40" height="40">
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
<!-- ============================================================= Content Start =========================================== -->
<span class="display-zero">en</span>
<!-- ============================================================= content ================================================= -->
<div class="uk-section uk-dark uk-background-cover" style="background-image: url('../../images/images/breadcrumbs.jpg')">
  <div class="uk-container uk-container-xlarge">
    <h2 class="uk-heading-small">Finger Lickin&#039; Good</h2> 
    <ul class="uk-breadcrumb">
      <li class="uk-button uk-button-text"><a href="{{route('layouts.frontend')}}">Home</a></li>
      <li><span>Finger Lickin&#039; Good</span></li>
    </ul>          
  </div>
</div>
<!-- =============================================================  content ================================================= -->
<div class="uk-section uk-section-muted">
  <div class="uk-container uk-container-xlarge">
    <div data-uk-grid>
     <div class="uk-width-expand">
            <img class="uk-border-10" data-src="images/images/5ed3e19b2172a(2355).png" width="100%" alt="Pfarrgasse 20, 4020 Linz" uk-img>
            
      <div class="uk-card uk-card-default uk-card-body uk-border-10 uk-margin">
        <div  uk-grid>
          <div class="uk-width-1-1">
            <article class="uk-article">
              <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                <li><a class="uk-color-2"><span uk-icon="icon: link; ratio: 0.8"></span> Pfarrgasse 20, 4020 Linz</a></li>
                <li><a class="uk-color-2"><span uk-icon="icon: clock; ratio: 0.8"></span> 11:00 - 14:0016:00 - 18:30 . €12.5 Usd</a></li>
                                <li><a class="uk-cat">Cupcake </a></li>
                              </ul>
              <p>Wir haben mit Front Food ein neues Gastronomiekonzept im Bereich Fast
 Food geschaffen. Wir wollen euch hungrige Menschen mit schnell 
zubereitetem Essen versorgen das schmeckt, wobei wir die Grundgedanken 
vom Fast Food völlig neu überdacht haben: In unserem Lokal findet ihr 
ein Angebot an Speisen, wie Ihr es aus gewöhnlichen Fast Food 
Restaurants gewohnt seid. Im Unterschied zu anderen Produkten kommen 
alle von uns angebotenen Produkte jedoch völlig ohne Fleisch oder 
anderen tierischen Produkten aus und sind somit 100% vegan.</p> 
            </article>
          </div>
          <div class="uk-width-expand@m">
            <div class="uk-article">
              <hr>
               
              <h3><span class="uk-margin-small-right" uk-icon="commenting"></span> 0 Comments</h3>
                            <a class="uk-button uk-button-small uk-button-primary uk-margin-right uk-border-rounded" href="#modal-example" uk-toggle>Reply Comment</a>
              <!--   ================  Messagge ================  -->
                            <!--   ================  Messagge ================  -->
              <!--   ================  Messagge ================  -->
                            <!--   ================  Messagge ================  -->
                            <!--   ================  Messagge ================  -->
              <ul class="uk-comment-list">
               <!-- =============================== Comments Posts ======================================== -->
                               <!-- =============================== Comments Posts ======================================== -->
              </ul>
              <!-- -------------------------- This is the modal --------------------------------- -->
              <div id="modal-example" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                  <h2 class="uk-modal-title">Reply Comment</h2>
                  <form  method="post" action="https://market.spidersx.com/Avocada/en/Comments">
                    <input type="hidden" name="_token" value="gfwJJIzXpp0Es4r8wpFshbD3UB7ulFwMzGRUvcbo">
                    <input type="text" name="Post_id" hidden="" value="126">
                    <div class="uk-margin">
                      <textarea  type="text" class="uk-textarea " name="Comment" rows="5" 
                      placeholder="Write Comment"></textarea>
                       
                    </div>
                    <p class="uk-text-right">
                      <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                      <button class="uk-button uk-button-primary" type="submit">Reply Comment</button>
                    </p>
                  </form>
                </div>
              </div>
              <!-- -------------------------- This is the modal --------------------------------- -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="uk-width-1-3@m">
     <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
      <div  uk-grid>
        <div class="uk-width-expand">
         <div class="uk-grid-small uk-child-width-auto" uk-grid>
          <div class="uk-margin-small-share">
            <h1 class="uk-heading-xsmall uk-margin-remove-top uk-heading-bullet uk-text-20">Share This Food :</h1>
          </div>
          <div>
            <a href="http://www.facebook.com/" class="uk-icon-button" uk-icon="facebook" target="_blank"></a>
            <a href="http://www.linkedin.com/" class="uk-icon-button" uk-icon="linkedin"></a>
            <a href="http://reddit.com/" class="uk-icon-button" uk-icon="reddit" target="_blank"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="uk-margin-top">
    <div  uk-grid>
          <div>
      <div class="uk-card uk-border-10 toggle uk-animation-toggle" tabindex="0">
        <div class="uk-card-media-top uk-list-three">
          <a href="{{route('Pages.Finger-lickin-good')}}">
            <img src="../../images/images/5ed3e19b2172a(2355).png" alt="Pfarrgasse 20, 4020 Linz" class="uk-card-border">
          </a>
        </div>
        <div class="uk-list-two">
          <h3 class="uk-card-title"><a href="{{route('Pages.Finger-lickin-good')}}" class="uk-link-heading">Finger Lickin&#039; Good</a>
             <form  method="post" action="https://market.spidersx.com/Avocada/en/Favourites" class="uk-display-flex">
              <input type="hidden" name="_token" value="gfwJJIzXpp0Es4r8wpFshbD3UB7ulFwMzGRUvcbo">
              <input type="number" name="Post_id" hidden="" value="126">
              <button class="uk-float-right uk-color-heart" type="submit" uk-icon="icon: heart"></button>
              </form>
          </h3>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
              <li><a href="{{route('Pages.Finger-lickin-good')}}" class="uk-color-2"><span uk-icon="icon: clock; ratio: 0.7"></span> 11:00 - 14:0016:00 - 18:30 . €12.5 Usd</a></li>
                            <li><a class="uk-cat">Cupcake </a></li>
                            <li class="uk-margin-top"><a href="{{route('Pages.Finger-lickin-good')}}" class="uk-color-2 uk-animation-slide-left-small uk-text-15">Delivered Now 
                <span uk-icon="icon: triangle-right"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
             <div>
      <div class="uk-card uk-border-10 toggle uk-animation-toggle" tabindex="0">
        <div class="uk-card-media-top uk-list-three">
          <a href="{{route('Pages.Food-Fight-and-mommy-lost')}}">
            <img src="../../images/images/5ed3e13f7ea86(2293).png" alt="Pfarrgasse 20, 4020 Linz" class="uk-card-border">
          </a>
        </div>
        <div class="uk-list-two">
          <h3 class="uk-card-title"><a href="{{route('Pages.Food-Fight-and-mommy-lost')}}" class="uk-link-heading">Food Fight And Mommy Lost</a>
             <form  method="post" action="https://market.spidersx.com/Avocada/en/Favourites" class="uk-display-flex">
              <input type="hidden" name="_token" value="gfwJJIzXpp0Es4r8wpFshbD3UB7ulFwMzGRUvcbo">
              <input type="number" name="Post_id" hidden="" value="125">
              <button class="uk-float-right uk-color-heart" type="submit" uk-icon="icon: heart"></button>
              </form>
          </h3>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
              <li><a href="{{route('Pages.Food-Fight-and-mommy-lost')}}" class="uk-color-2"><span uk-icon="icon: clock; ratio: 0.7"></span> 11:00 - 14:0016:00 - 18:30 . €19.5 Usd</a></li>
                            <li><a class="uk-cat">Cupcake </a></li>
                            <li class="uk-margin-top"><a href="{{route('Pages.Food-Fight-and-mommy-lost')}}" class="uk-color-2 uk-animation-slide-left-small uk-text-15">Delivered Now 
                <span uk-icon="icon: triangle-right"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
              </div>
    </div>
    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-margin-top">
      <div  uk-grid>
       <div class="uk-width-1-1">
        <div class="uk-width-expand">
          <h4 class="uk-comment-title"><a class="uk-link-reset">Delivered To You</a></h4>
          <p class="uk-comment-meta uk-margin-remove"><a class="uk-color-list"></a></p>
        </div> 
      </div>
      <!-- ================================ Messagge  ==================================== -->
      <script>
        function Order() {
          var x = document.forms["Order"]["Content"].value;
          if (x == null || x == "" || x.length > 50 ) {
           window.location.href = 'https://market.spidersx.com/Avocada';
           return false;
         }
       }
     </script>
     <!-- ================================ Messagge  ================================ -->
     <div class="uk-width-expand uk-margin-top">
       <!--   ================  Messagge ==============================================  -->
             <!--   ===============================  Messagge  ==============================  -->
            <!-- ===============================  Messagge  ==================================== -->
      <form method="post" action="https://market.spidersx.com/Avocada/en/Order" name="Order" onsubmit="return Order()">
        <input type="hidden" name="_token" value="gfwJJIzXpp0Es4r8wpFshbD3UB7ulFwMzGRUvcbo">
        <div>
          <div class="uk-inline uk-width">
            <span class="uk-form-icon" uk-icon="icon:  user"></span>
            <input class="uk-input " type="text" placeholder="Your Name" name="Name">
                      </div>
          <div class="uk-inline uk-width uk-margin-top">
            <textarea name="Content" class="uk-textarea " rows="5" placeholder="Order with Your Phone And Location All Order come within a custom time period according to your address"></textarea>
                      </div>
        </div>
        <button type="submit" class="uk-button uk-button-secondary uk-border-pill uk-margin-top uk-button-small">Delivered 
          <span uk-icon="arrow-right"></span></button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!-- ============================================================= Content ================================================= -->
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

<!-- Mirrored from market.spidersx.com/Avocada/en/Foods/finger-lickin-good by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jul 2021 08:51:44 GMT -->
</html>