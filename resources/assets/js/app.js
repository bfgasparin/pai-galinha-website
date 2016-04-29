window.$ = window.jQuery = require('jquery');

import Vue from 'vue';

//vue components 
import PgMenu from './components/materialize-css/PgMenu.vue';
import PgMenuItem from './components/materialize-css/PgMenuItem.vue';
import PgAdvice from './components/materialize-css/PgAdvice.vue';
import PgNews from './components/materialize-css/PgNews.vue';
import PgSection from './components/materialize-css/PgSection.vue';

require('materialize');

new Vue ({
	'el': 'body',
	'components': { PgMenu, PgMenuItem, PgAdvice, PgNews, PgSection }
}) 