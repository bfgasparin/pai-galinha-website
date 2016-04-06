<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>teste</title>
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <pg-menu mobile-icon="label">
        <pg-menu-item>Item 1</pg-menu-item>
        <pg-menu-item>Item 2</pg-menu-item>
        <pg-menu-item>Item 3</pg-menu-item>
    </pg-menu>
    
    <div id="content">
        @yield('content')
    </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company</h5>
          <p class="grey-text text-lighten-4">Bla Bla Bla Bla.</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Fundadores</h5>
          <ul>
            <li><a class="white-text" href="#!">Rafael</a></li>
            <li><a class="white-text" href="#!">Bruno</a></li>
            <li><a class="white-text" href="#!">Ronaldo</a></li>
            <li><a class="white-text" href="#!">Sérgio</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Feito por <a class="brown-text text-lighten-3" href="http://ldcompany.com">Company</a>
      </div>
    </div>
  </footer>    

    <!-- JavaScripts -->
    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>
