
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

window.$ = window.jQuery = require('jquery');
require('jquery-ujs');
require('bootstrap-sass');

/**
 * Plugins
 */
require('slick-carousel');
require('jssocials');
require('../bower_vendor/imgLiquid/js/imgLiquid');
window.baguetteBox = require('baguettebox.js');
require('../plugins/Modaal-master/dist/js/modaal.js');

/**
 *  Custom Plugins
 */
require('./modules/ajaxLoadingAnimation');
require('./modules/infiniteScroll/infiniteSpy');
