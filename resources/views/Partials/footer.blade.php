<footer class="uk-section uk-dark" style="background-image: url('../images/images/Footer.png');">
  <div class="uk-container uk-container-xlarge  uk-text-500">
    <div class="uk-child-width-1-2@s uk-child-width-1-4@m" data-uk-grid>
      <div>
        <a href="https://market.spidersx.com/Avocada" class="uk-logo uk-display-block"><img alt="Avocada" src="../images/images/logo.png"></a>
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
        <a href="http://www.youtube.com/" data-uk-icon="icon: youtube" class="uk-icon-link" target="_blank"></a>
      </div>
    </div>
  </div>
</div>
</div>
<!-- ===========================================  content =================================== -->
</body>