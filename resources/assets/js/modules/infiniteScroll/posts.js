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
            <a href="/post/${post.id}/" style="text-decoration: none">
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding: 1px">
                <div class="o-container" style="width: 100%; height: 55vh">
                  <div class="magicfit ts-fade" src="${post.image}" style="width: inherit; height: inherit"></div>
                  <h2 class="o-header text-warning">${post.title}</h2>
                  <p class="o-text text-warning">${post.date}</p>
                </div>
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
