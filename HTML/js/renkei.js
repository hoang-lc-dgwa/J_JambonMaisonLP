jQuery(function ($) {
  $(window).on("load", function () {
    $(".rk-mainVisual").addClass("is-show");
  });

  $windowHeight = $(window).height();
  $("#rk-mainVisual-bg li").css("height", $windowHeight);
  $("#rk-mainVisual-bg").css("height", $windowHeight);

  $("#rk-mainVisual-bg").slick({
    accessibility: false,
    autoplay: true,
    arrows: false,
    dots: true,
    autoplaySpeed: 10000,
    fade: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    waitForAnimate: false,
  });

  $(".js-rk-gallery").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 2500,
    cssEase: "linear",
    focusOnSelect: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    draggable: false,
    responsive: [
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  $("#rk-mainVisual-bg").find(".item:eq(0)").addClass("item-on is-first");

  $("#rk-mainVisual-bg").on("beforeChange", function (e, s, c, n) {
    $(this)
      .find(".item:eq(" + n + ")")
      .addClass("item-on");
  });

  $("#rk-mainVisual-bg").on("afterChange", function () {
    $(this).find(".item:not(.slick-active)").removeClass("item-on");
  });

  $("#rk-mainVisual-bg").on(
    "touchmove",
    function (event, slick, currentSlide, nextSlide) {
      $("#rk-mainVisual-bg").slick("slickPlay");
    }
  );

	$(".js-rk-viewmore-btn").click(function () {
    $(this).parent().addClass("is-hidden");
    $(".rk-profile__content").addClass("is-show");
  });
});