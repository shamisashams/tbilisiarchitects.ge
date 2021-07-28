$(".history_slide").slick({
  draggable: true,
  arrows: false,
  dots: true,
  speed: 900,
  autoplay: false,
  infinite: false,
  cssEase: "linear",
  touchThreshold: 100,
});

$(".company_certificate_slide").slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  draggable: true,
  arrows: true,
  prevArrow: "#prev_certify",
  nextArrow: "#next_certify",
  dots: false,
  speed: 200,
  autoplay: false,
  infinite: true,
  cssEase: "linear",
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});

$(".pagination_slider").slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  draggable: false,
  arrows: true,
  prevArrow: "#prev_pag",
  nextArrow: "#next_pag",
  dots: false,
  speed: 100,
  autoplay: false,
  infinite: false,
  cssEase: "linear",
});
