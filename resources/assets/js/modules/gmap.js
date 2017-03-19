(function() {

  var container = $('#gmap-container');
  var mapConfig = {
    el: '#gmap-container',
    lat: -12.043333,
    lng: -77.028333
  };
  var markerConfig = {
    lat: -12.043333,
    lng: -77.028333,
    title: 'W D.C',
    infoWindow: {
      content: '<p style="color: black">HTML Content</p>'
    }
  };

  var fetchData = function() {
    $.ajax({
      url: route.gmap,
      type: 'GET',
      success: function(data, textStatus, xhr) {
        mapConfig.lat = data.lat;
        mapConfig.lng = data.lng;
        markerConfig.lat = data.lat;
        markerConfig.lng = data.lng;
        markerConfig.title = data.address;
        markerConfig.infoWindow.content = `
          <p style="color: black">${data.address}</p>
        `;

        var map = new GMaps(mapConfig);
        map.addMarker(markerConfig);
      },
      error: function(xhr, textStatus, errorThrown) {
        //called when there is an error
      }
    });
  };

  var main = function() {
    fetchData();
  };

  return render(container, main)
})();
