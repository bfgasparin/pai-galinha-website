<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>teste</title>
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav role="navigation" class="z-depth-3" >
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Item 1</a></li>
        <li><a href="#">Item 2</a> </li>
        <li><a href="#">Item 3</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Item 1</a></li>
        <li><a href="#">Item 2</a></li>
        <li><a href="#">Item 3</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>


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
    <!-- Materialize has no support for browserify yet , do I fetch it from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.button-collapse').sideNav();
        }); // end of document ready
    </script>
     @stack('scripts')
</body>
</html>
