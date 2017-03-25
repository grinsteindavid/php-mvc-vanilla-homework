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
            <a href="${video.youtube_url}" class="video col-xs-12 col-sm-6 col-md-4 col-lg-3" style="padding: 1px">
              <div class="o-container" style="width: 100%; height: 50vh">
                <div class="magicfit ts-fade" src="${video.youtube_mini}" style="width: inherit; height: inherit"></div>
                <span class="play-button"></span>
                <h4 class="o-header text-warning" style="word-break: break-all">${video.title}</h4>
                <p class="o-text text-warning">${video.date}</p>
              </div>
            </a>
          `);
        });
        MagicFit.reload();
        Animations.update();
        Transitions.update();
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
      offset: 350,
      callback: callback
    });
    container.find('.video').modaal(modaalConfig);
  };

  return render(container, main);
})();
