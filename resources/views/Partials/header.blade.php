<nav class="uk-navbar-container uk-letter-spacing-small">
    <div class="uk-container uk-container-xlarge">
      <div class="uk-position-z-index" data-uk-navbar>
        <div class="uk-navbar-left">
          <!-- ===========================================  content =================================== -->
          <a class="uk-navbar-item uk-logo" href="{{route('layouts.frontend')}}">
            <img alt="Avocada" src="images/images/logo.png">
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
              <img class="uk-comment-avatar uk-border-rounded" src="images/images/avatar.png" alt="avatar" width="40" height="40">
            </a>
          </li>
        </ul>
        <div uk-dropdown="mode: click ;pos: bottom-right">
          <ul class="uk-nav uk-dropdown-nav">
            <li><a href="{{route('Auth.login')}}"><span uk-icon="sign-in"></span> Sign In</a></li>
            <li><a href="{{route('Auth.Register')}}"><span uk-icon="user"></span> Sign Up</a></li>
          </ul>
        </div>
              <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span data-uk-navbar-toggle-icon></span></a>
    </div>
  </div>
</div>
</nav>