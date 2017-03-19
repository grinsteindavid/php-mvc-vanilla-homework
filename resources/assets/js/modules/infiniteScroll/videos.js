(function() {

  var container = $('#videos-container');
  var loading = false;
  var finished = false;
  var videosCounter = 0;
  var modaalConfig = {
    type: 'video'
  };

  var callback = function() {
    if (loading || finished) {return};

    loading = true;
    ajaxLoading.open();
    $.ajax({
      url: route.videos,
      type: 'GET',
      headers: {'videosCounter': (videosCounter += 1)},
      success: function(data, textStatus, xhr) {
        $.each(data.videos, function(index, video) {
          container.append(`
            <a title="caption for image 1" href="${video.url}" class="col-xs-6 col-sm-6 col-md-4 col-lg-4" style="padding: 0">
              <img class="img-thumbnail" src="${video.url}" width="100%">
            </a>
          `);
        });
        container.find('.video').modaal(modaalConfig);
        loading = false;
        ajaxLoading.close();
      },
      error: function(xhr, textStatus, errorThrown) {
        //called when there is an error
        finished = true;
      }
    });
  };

  var main = function() {
    infiniteSpy({
      offset: 150,
      callback: callback
    });
    container.find('.video').modaal(modaalConfig);
  };

  return render(container, main);
})();
