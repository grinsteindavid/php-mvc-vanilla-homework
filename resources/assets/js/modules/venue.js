(function() {

  var container = $('body');
  var venue = null;

  var set_layout_links = function(data) {
    $("#fb_link_layout").attr("href", data.facebook);
    $("#twt_link_layout").attr("href", data.twitter);
    $("#instg_link_layout").attr("href", data.instagram);
    $("#ytb_link_layout").attr("href", data.youtube);
    $("#logo_img").attr("src", data.logo);
  }

  var main = function() {
    $.ajax({
      url : route.venue,
      type : 'get',
      dataType:"json",
      data : {

      },
      success : function(response) {
        console.info(response);
        set_layout_links(response.venue);
      },
      beforeSend : function() {
        $(".processing-request").show();
      },
      complete : function() {
        $(".processing-request").hide();
      }
    });
  };

  return render(container, main);
})();
