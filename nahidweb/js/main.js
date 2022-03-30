jQuery(document).ready(function () {
  jQuery(".slider").bxSlider({
    mode: "fade",
    captions: true,
    auto: true,
  });
  jQuery("#owl-slider").owlCarousel({
    autoplay: true,
    items: 3,
    autoHeight: false,
    autoWidth: false,
    lazyLoad: true,
    smartSpeed: 450,
  });
});
