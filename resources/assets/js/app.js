
/**
 * First we will load all of this project's JavaScript dependencies.
 */
require('./bootstrap');

/**
 * Main process function.
 */
$(function main() {

  // Global function to initialize component's logic.
  window.render = function(HTMLcontainer, callback) {
    if (HTMLcontainer.length) {callback()};
  };

  // Simple social network sharing jQuery plugin.
  $('#js-socials').jsSocials({
    shareIn: 'popup',
    showLabel: false,
    shares: ['twitter', 'facebook', 'googleplus', 'pinterest', 'whatsapp']
  });

  // Initialize bootstrap form validator.
  $('[role="form"]').validator({delay: 100});

  // Initialize dropify to upload files.
  $('[type="file"]').dropify();

  // Initialize Bootstrap tooltip.
  $('[data-toggle="tooltip"]').tooltip();

  // Initialize MagicFit to render pictures inside divs.
  MagicFit.run();
  $(window).resize(() => MagicFit.resize());

  // initialize JS Animations and Transitions.
  Animations.update();
  Transitions.update();

  // Modules
  require('./modules/slick-carousel/events');
  require('./modules/slick-carousel/vouchers');
});
