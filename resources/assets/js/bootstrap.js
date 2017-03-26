
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
require('bootstrap-validator');
require('slick-carousel');
require('toastr');
require('dropify');
require('jssocials');
require('../plugins/Calendario-master/js/jquery.calendario');
require('../plugins/ajax-loading-animation-master/ajax-loading.js');
window.baguetteBox = require('baguettebox.js');
require('../plugins/Modaal-master/dist/js/modaal.js');
window.GMaps = require('gmaps');
window.swal = require('sweetalert2');
window.Cookies = require('js-cookie');

/**
 *  Custom Plugins
 */
require('./modules/ajaxLoadingAnimation');
require('./modules/infiniteScroll/infiniteSpy');
require('./modules/magicFit');
require('./modules/confirm-alerts');
require('./modules/css/transitions');
require('./modules/css/animations');
