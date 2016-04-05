window.$ = window.jQuery = require('jquery');

import Vue from 'vue';

//vue components 
import PgMenu from './components/materialize-css/PgMenu.vue';
import PgMenuItem from './components/materialize-css/PgMenuItem.vue';

require('materialize');
require('particles.js');

new Vue ({
	'el': 'body',
	'components': { PgMenu, PgMenuItem }
}) 