(function() {

  var container = $('#photos-container');
  var config = {
    fullScreen: false,
    async: true
  };

  window.updatePhotoContainer = function() {
    baguetteBox.run('#photos-container', config);
  };

  var main = function() {
    updatePhotoContainer();
  };

  return render(container, main);
})();
