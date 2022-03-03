$(document).ready(function () {
  $(".responsive").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow:
      "<span class='priv_arrow'><i class='fa-solid fa-arrow-left'></i></span>",
    nextArrow:
      "<span class='next_arrow'><i class='fa-solid fa-arrow-right'></i></span>",

    responsive: [
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
});
