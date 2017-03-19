
/**
 * First we will load all of this project's JavaScript dependencies.
 */
require('./bootstrap');


/**
 * Main process function.
 */
$(function main() {

  // ImgLiquidFill Initialize, jQuery plugin to resize images to fit in a container.
  $('.imgLiquidFill').imgLiquid({
    fill: true,
    onFinish: function() {
      // Show image containers after document ready.
      $('.imgLiquid, .imgLiquidFill').css('opacity', '1');
    }
  });

  // Global function to initialize components.
  window.render = function(HTMLcontainer, callback) {
    if (HTMLcontainer.length) {callback()};
  };

  // Simple social network sharing jQuery plugin.
  $('#js-socials').jsSocials({
    shareIn: 'popup',
    showLabel: false,
    shares: ['twitter', 'facebook', 'googleplus', 'pinterest', 'whatsapp']
  });

  // Modules
  require('./modules/gallery');
  require('./modules/css/transitions');
  require('./modules/css/animations');
});

