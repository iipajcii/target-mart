<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Webstore - @yield('title')</title>
</head>
<body>
    <header>
        <div class="hero is-primary">
          <div class="hero-body">
            <div class="container">
              <h1 class="title">
                Webstore Header
              </h1>
              <nav>

              </nav>
            </div>
          </div>
        </div>
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
              <a class="navbar-item">
                Home
              </a>

              <a class="navbar-item">
                Documentation
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
                  <a class="button is-light">
                    Log in
                  </a>
                </div>
              </div>
            </div>
          </div>
        </nav>
    </header>
    <body>
        @yield('content')
    </body>
    <footer class="footer">
        <div class="container has-text-centered">
            <i class="fabs fa-twitter"></i>WebMart&copy <br/>
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
