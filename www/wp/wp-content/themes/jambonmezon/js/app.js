jQuery(function ($) {

  /* 表示準備 */
  $(".js-hide.js-show").removeClass("js-show");
  $(window).on('load', function () {
    $('.js-hide').addClass('js-show');
    $('#header').addClass('js-show');
  });

  $('.menu li > a.anc').on('click', function (event) {
    var $checkBox = $('#drawer-checkbox');
    if ($checkBox.prop("checked") == true) {
      $checkBox.removeAttr('checked').prop('checked', false).change();
    }
  });

  $(function() {
    $('.menu li > a[href*=#]:not([href=#])').click(function() 
    {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
          || location.hostname == this.hostname) 
      {
        if ($('body').width() > 752) {
          if ($('.gnav').hasClass('fixed')) {
            //alert('aaa');
            var target = $(this.hash),
            headerHeight = $(".gnav").outerHeight() - 30; // Get fixed header height
          }else {
            //alert('bbb');
            var target = $(this.hash),
            headerHeight = $(".gnav").outerHeight() - 30; // Get fixed header height
          }
        } else {
          var target = $(this.hash),
          headerHeight = $(".gnav").outerHeight(); // Get fixed header height
        } 
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                
        if (target.length) 
        {
          $('html,body').animate({
            scrollTop: target.offset().top - headerHeight
          }, 500);
          return false;
        }
      }
    });
  });

  var $header = $('#header');
  var headerH = $header.outerHeight();
  var $menu = $('#js-menu');
  var menuH = $menu.outerHeight();
  var $body = $('body');
  var scrollTop = $('.mainVisual').outerHeight() - 10;
  var winW = $(window).width();
  var breakP = 960;
  var timer = false;

  $(window).on('resize', function () {
    if (timer !== false) {
      clearTimeout(timer);
    }
    timer = setTimeout(function () {
      winW = $(window).width();
      if (winW < breakP) {
        if ($menu.hasClass("standby fixed")) {
          $menu.removeClass("standby fixed");
          $menu.css({ transition: "" });
        }
      }
    }, 500);
  });

  jQuery(window).on("scroll", function () {

    if (winW >= breakP) {

      if ($(window).scrollTop() > scrollTop) {
        $menu.addClass("standby").addClass("fixed");
      } else if (jQuery(window).scrollTop() > headerH) {
        if ($menu.hasClass("standby")) {
          $menu.css({ transition: "transform .5s" });
        } else {
          $menu.css({ transition: "" });
        }
        $menu.addClass("standby").removeClass("fixed");
      } else {
        $menu.css({ transition: "" });
        $menu.removeClass("standby fixed");
      }
    } else if (winW < breakP) {
      $(window).on("scroll", function () {
        $(this).scrollTop() > scrollTop ? $body.addClass("bgWhite") : $body.removeClass("bgWhite");
      });
    }
  });

  /* for mainVisual*/
  $windowHeight = $(window).height();
  $('.slider li').css('height', $windowHeight);
  $('.slider').css('height', $windowHeight);

  $('.slider').slick({
    accessibility: false,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 10000,
    fade: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    waitForAnimate: false
  });

  $(".slider").find("li:eq(0)").addClass("top_slide_on top_slide_first");

  $(".slider").on("beforeChange", function (e, s, c, n) {
    $(this).find("li:eq(" + n + ")").addClass("top_slide_on");
  });

  $(".slider").on("afterChange", function () {
    $(this).find("li:not(.slick-active)").removeClass("top_slide_on");
  });

  $('.slider').on('touchmove', function (event, slick, currentSlide, nextSlide) {
    $('.slider').slick('slickPlay');
  });

});

