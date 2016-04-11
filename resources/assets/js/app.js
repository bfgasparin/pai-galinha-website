window.$ = window.jQuery = require('jquery');

import Vue from 'vue';

//vue components 
import PgMenu from './components/materialize-css/PgMenu';
import PgMenuItem from './components/materialize-css/PgMenuItem';
import PgMainPhrase from './components/materialize-css/PgMainPhrase';
import PgNews from './components/materialize-css/PgNews';
import PgSection from './components/materialize-css/PgSection';

require('materialize');

new Vue ({
	'el': 'body',
	'components': { PgMenu, PgMenuItem, PgMainPhrase, PgNews, PgSection }
}) 