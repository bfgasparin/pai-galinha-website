window.$ = window.jQuery = require('jquery')

require('particles.js');

// Commented because materialize does not work yet with browserify (https://github.com/Dogfalo/materialize/issues/1422)
// We fetch the materialize JS from CND and  inicialize the components inside the template
// require('materialize-css');

//  $(document).ready(function(){
//     $('.button-collapse').sideNav();
// }); // end of document ready