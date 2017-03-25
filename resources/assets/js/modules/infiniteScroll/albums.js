(function() {

  var container = $('#albums-container');
  var loading = false;
  var finished = false;
  var albumsCounter = 0;

  var callback = function() {
    if (loading || finished) {return};

    loading = true;
    ajaxLoading.open();
    $.ajax({
      url: route.albums,
      headers: {'albumsCounter': (albumsCounter += 1)},
      type: 'GET',
      success: function(data, textStatus, xhr) {
        $.each(data.albums, function(index, album) {
          container.append(`
            <a title="caption for image 1" href="/album/${album.id}/" class="col-xs-12 col-sm-4 col-md-3 col-lg-3" style="padding: 1px">
              <div class="o-container" style="width: 100%; height: 50vh">
                <div class="magicfit ts-fade" src="${album.cover}" style="width: inherit; height: inherit"></div>
                <h2 class="o-header text-warning">${album.title}</h2>
                <p class="o-text text-warning">${album.date}</p>
              </div>
            </a>
          `);
        });
        MagicFit.reload();
        Animations.update();
        Transitions.update();
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
  };

  return render(container, main);
})();
