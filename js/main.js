// Loader
$(window).on("load", function () {
  setTimeout(function () {
    $(".loaderWrapper").fadeOut("slow");
  }, 1000);
});

//scroll sections
$(".scroll").on("click", function (event) {
  event.preventDefault();
  $("html,body").animate(
    {
      scrollTop: $(this.hash).offset().top,
    },
    1200
  );
});

// Back To Top
$(window).on("scroll", function () {
  if ($(this).scrollTop() > 500) $(".backTop").fadeIn("slow");
  else $(".backTop").fadeOut("slow");
});

$(document).on("click", ".backTop", function () {
  $("html, body").animate({ scrollTop: 0 }, 800);
  return false;
});

// Header
$(window).on("scroll", function () {
  console.log($(this).scrollTop());
  if ($(this).scrollTop() >= 30) {
    // set to new image
    $(".navbarArea .navbar-brand img").attr("src", "images/logo.png");
  } else {
    //back to default
    $(".navbarArea .navbar-brand img").attr("src", "images/logoW.png");
  }
});
window.onload = function () {
  const getHeaderId = document.getElementById("navbar");
  if (getHeaderId) {
    window.addEventListener("scroll", (event) => {
      const height = 50;
      const { scrollTop } = event.target.scrollingElement;
      document
        .querySelector("#navbar")
        .classList.toggle("sticky", scrollTop >= height);
    });
  }
  const getId = document.getElementById("backtotop");
  if (getId) {
    const topbutton = document.getElementById("backtotop");
    topbutton.onclick = function (e) {
      window.scrollTo({ top: 0, behavior: "smooth" });
    };
    window.onscroll = function () {
      if (
        document.body.scrollTop > 200 ||
        document.documentElement.scrollTop > 200
      ) {
        topbutton.style.opacity = "1";
      } else {
        topbutton.style.opacity = "0";
      }
    };
  }
};

// Testimonial Slider
$(".testimonialSlider").owlCarousel({
  items: 1,
  dots: true,
  loop: true,
  autoplayTimeout: 8000,
  autoplay: true,
});

// Hero Slider
jQuery(function ($) {
  $("#rev_slider_12_1")
    .show()
    .revolution({
      sliderType: "standard",
      jsFileLocation: "//localhost:82/revslider/revslider/public/assets/js/",
      sliderLayout: "fullscreen",
      dottedOverlay: "none",
      delay: 9000,
      navigation: {
        keyboardNavigation: "off",
        keyboard_direction: "horizontal",
        mouseScrollNavigation: "off",
        mouseScrollReverse: "default",
        onHoverStop: "off",
        bullets: {
          enable: true,
          hide_onmobile: false,
          style: "heroex",
          hide_onleave: false,
          direction: "vertical",
          h_align: "right",
          v_align: "center",
          h_offset: 50,
          v_offset: 0,
          space: 5,
          tmp: '<div class="tp-bullet-number"><span class="tp-count">{{param1}}</span><span class="tp-bullet-line"></span></div>',
        },
      },
      viewPort: {
        enable: true,
        outof: "pause",
        visible_area: "90%",
      },
      responsiveLevels: [1280, 1024, 768, 480],
      gridwidth: [1140, 1024, 768, 480],
      gridheight: [868, 768, 960, 720],
      shadow: 0,
      spinner: "off",
      stopLoop: "off",
      stopAfterLoops: -1,
      stopAtSlide: -1,
      shuffle: "off",
      autoHeight: "off",
      hideThumbsOnMobile: "off",
      hideSliderAtLimit: 0,
      hideCaptionAtLimit: 0,
      hideAllCaptionAtLilmit: 0,
      debugMode: false,
      fallbacks: {
        simplifyAll: "off",
        nextSlideOnWindowFocus: "off",
        disableFocusListener: false,
      },
    });
});
