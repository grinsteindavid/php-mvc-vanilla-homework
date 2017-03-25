window.Transitions = {
  update: function() {

    // Transition fade for objects inside overlay-containers.
    $('.o-container').off();
    $('.o-container').hover(
      function() {
        $(this).find('.ts-fade').css('opacity', '0.3');
      },
      function() {
        $(this).find('.ts-fade').css('opacity', '1');
      }
    );

  }
};
