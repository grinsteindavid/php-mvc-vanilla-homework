// Transition fade for objects inside overlay-containers.
$('.o-container').hover(
  function() {
    $(this).find('.ts-fade').css('opacity', '0.3');
  },
  function() {
    $(this).find('.ts-fade').css('opacity', '1');
  }
);
