(function() {

  var container = $('#slick-announces');
  var responsiveConfig = [
    {
      breakpoint: 1024,
      settings: {
      }
    },
    {
      breakpoint: 600,
      settings: {
      }
    },
    {
      breakpoint: 480,
      settings: {
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ];
  var slickConfig = {
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: responsiveConfig
  };

  var main = function() {
    container.slick(slickConfig);
  };

  return render(container, main);
})();
