@extends('layouts.app')

@section('content')
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Frase</h1>
        <div class="row center">
           <h5 class="header col s12 light white-text">Algum texto qualquer</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="http://lorempixel.com/1600/920" alt="Pai Galinha"></div>
  </div> 

  <div class="container">
    <h2 class="center brown-text" >Ultimas novidades</h2>
    <div class="section">
      <!--   News Section   -->
      <div class="row">
        <a href="#">
          <div class="col s12 m4 z-depth-1 hoverable" style="position: relative; color: black;">
            <div class="icon-block">
              <span class="badge active">Novo</span>
              <h3 class="center brown-text">A</h3>
              <h5 class="center">Como matar um caranguero</h5>
              <p class="light center">dadashd ahdas duad ausid ashduashduasd audh ashduas dhasu dahsd asudh asudhas udhasu dhasud asudhasudasudhasudh udash duiahdaushd ahsdasuadhs dhausd ashdah aduadhasu d.</p>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="col s12 m4" style="position: relative; color: black;">
            <div class="icon-block">
              <h3 class="center brown-text">B</h3>
              <h5 class="center">Titulo</h5>

              <p class="light center">Hoje seu dia será mill grau.</p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="col s12 m4 z-depth-1 hoverable" style="position: relative; color: black; ">
            <div class="icon-block">
              <h3 class="center brown-text">C</h3>
              <h5 class="center">Bla bla bla</h5>
              <p class="light center">dasdha dad ashduai dhua dauisd asuhd auhdasud ahsud asdhau dhadu ahda dasud asdhuas s.</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div> 
  <div style="height: 300px" class="teal" id="particles-js">
        <div style="position: absolute; width: 100%; height: inherit;" class="valign-wrapper">
          <h3  style="padding-top: 8rem;  width: inherit; height: inherit;" class="valign white-text center-align">Quanto vale o show</h3>
        </div>
  </div> 
    <div class="container">
    <div class="col l4 z-depth-1 hoverable" style="position: relative; color: black;">
            <div class="icon-block">
              <h3 class="center brown-text">A</h3>
              <h5 class="center">Como matar um caranguero</h5>
              <p class="light center">dadashd ahdas duad ausid ashduashduasd audh ashduas dhasu dahsd asudh asudhas udhasu dhasud asudhasudasudhasudh udash duiahdaushd ahsdasuadhs dhausd ashdah aduadhasu d.</p>
            </div>
          </div>
          </div>

@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.parallax').parallax();
        }); // end of document ready
      
        $(document).ready(function(){
            $('.carousel').carousel({'dist': -100, padding: 150, shift: 120});
        });

        particlesJS.load('particles-js', 'build/config/particles.json', function() {
          console.log('callback - particles.js config loaded');
        });
    </script>
@endpush