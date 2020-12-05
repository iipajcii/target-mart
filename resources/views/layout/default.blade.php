<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>{{env('APP_NAME')}} &copy - Jamaica's First Social Online Marketplace - @yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation">
          <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
              <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
          </div>

          <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
              <a class="navbar-item" href="{{route('index')}}">
                Home
              </a>

              <a class="navbar-item" href="{{route('blog')}}">
                Blog
              </a>

              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                  More
                </a>

                <div class="navbar-dropdown">
                  <a class="navbar-item">
                    About
                  </a>
                  <a class="navbar-item">
                    Jobs
                  </a>
                  <a class="navbar-item">
                    Contact
                  </a>
                  <hr class="navbar-divider">
                  <a class="navbar-item">
                    Report an issue
                  </a>
                </div>
              </div>
            </div>

            <div class="navbar-end">
              <div class="navbar-item">
                <div class="buttons">
                  <a class="button is-primary">
                    <strong>Sign up</strong>
                  </a>
                  <a class="button is-light" href="{{route('login')}}">
                    Log in
                  </a>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <div class="hero is-white">
          <div class="hero-body">
            <div class="container">
              <form method="get" action="{{route('search')}}">
                <input type="text"   class="pl-3" style="height:2.5rem; font-size: 1rem; min-width: calc(80%); width: 90%;" name="s" placeholder="Search for Products"/>
                <input type="submit" class="button is-primary" style="height:2.5rem; min-width: calc(7%);" value="Search">
              </form>
            </div>
          </div>
        </div>
    </header>
    <body>
        @yield('content')
    </body>
    <footer class="footer">
        <div class="container has-text-centered">
            <span class="is-size-6" style="display: block; font-weight: bold;">{{env('APP_SLOGAN')}}</span>
            <span style="display: block;">{{env('APP_NAME')}} &copy</span><br/>
            <div class=" is-size-3" style="letter-spacing: 1em;">
                <a class="icon youtube-icon" href="https://youtube.com">
                    <i class="fab fa-youtube"></i>
                </a>
                <a class="icon twitter-icon" href="https://twitter.com">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="icon facebook-icon" href="https://www.facebook.com">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="icon instagram-icon" href="https://www.instagram.com">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="icon email-icon" href="https://gmail.com">
                    <i class="fas fa-envelope-open-text"></i>
                </a>
            </div>
        </div>
    </footer>
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    @yield('scripts')
</body>
</html>
