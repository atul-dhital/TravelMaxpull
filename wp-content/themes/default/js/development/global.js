$(".package").slick({
  infinite: true,
  centerPadding: "25px",
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplay: true,
  centerMode: true,
  autoplaySpeed: 4000,
  dots: false,
  prevArrow: false,
  nextArrow: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 1,
        autoplay: true,
        autoplay: true,
      },
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "40px",
        slidesToShow: 1,
      },
    },
  ],
});
$(".hero__slider").slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  centerMode: true,
  variableWidth: true,
  autoplaySpeed: 2000,
  dots: false,
  prevArrow: false,
  nextArrow: false,
});
