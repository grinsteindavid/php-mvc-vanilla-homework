(function() {

  var container = $('#post-container');
  var loading = false;
  var finished = false;
  var postsCounter = 0;

  var callback = function() {
    if (loading || finished) {return};

    loading = true;
    ajaxLoading.open();
    $.ajax({
      url: route.posts,
      type: 'GET',
      headers: {'postsCounter': (postsCounter += 1)},
      success: function(data, textStatus, xhr) {
        $.each(data.posts, function(index, post) {
          container.append(`
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding: 0">
              <img class="img-thumbnail" src="${post.url}" width="100%">
            </div>
          `);
        });
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
  };

  return render(container, main);
})();
