function _call_carousel(cnt) {
  // INIT CAROUSEL
  window["carousel_" + cnt] = new CgCarousel(
    "#js-carousel_" + cnt,
    window["carousel_options_" + cnt],
    {},
  );
  // Navigation
  let nextBtn = document.getElementById("js-carousel__next_" + cnt);
  if (nextBtn) {
    nextBtn.addEventListener("click", () => window["carousel_" + cnt].next());
  }
  let prevBtn = document.getElementById("js-carousel__prev_" + cnt);
  if (prevBtn) {
    prevBtn.addEventListener("click", () => window["carousel_" + cnt].prev());
  }
}

$(window).scroll(function () {
  const scrollHeight = $(window).scrollTop();
  const windowWidth = $(window).width();

  if (scrollHeight >= 100) {
    $("#back2Top").fadeIn(1000);
  } else {
    $("#back2Top").fadeOut(1000);
  }

  if (scrollHeight >= 400) {
    $("header").addClass("scrolled");
  } else {
    $("header").removeClass("scrolled");
  }

  if (windowWidth <= 870) {
    $(".sticky-div").css({
      position: "relative",
      top: "0",
      height: "auto",
      overflow: "visible",
    });
  } else {
    if (scrollHeight >= 700) {
      $(".sticky-div").css({
        position: "sticky",
        top: "140px",
        "min-height": "280px",
        overflow: "auto",
      });
    } else {
      $(".sticky-div").css({
        position: "relative",
        top: "0",
        height: "auto",
        overflow: "auto",
      });
    }
  }
});

function _backToTop() {
  event.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
}

function _openMenu() {
  $(".sidenavdiv, .sidenavdiv-in").animate({ "margin-left": "0" }, 200);
  $(".live-chat-back-div").animate({ "margin-left": "-100%" }, 400);
  $(".index-menu-back-div").animate({ "margin-left": "0" }, 400);
}

function _openLiveChat() {
  $(".sidenavdiv, .sidenavdiv-in").animate({ "margin-left": "0" }, 200);
  $(".index-menu-back-div").animate({ "margin-left": "-100%" }, 400);
  $(".live-chat-back-div").animate({ "margin-left": "0" }, 400);
}

function _closeSideNav() {
  $(".sidenavdiv, .sidenavdiv-in").animate({ "margin-left": "-100%" }, 200);
  $(".index-menu-back-div,.live-chat-back-div").animate(
    { "margin-left": "-100%" },
    400,
  );
}

function _openLi(ids) {
  $("#" + ids + "-sub-li").toggle("slow");
}

///// for FAQs
function _collapse(div_id) {
  const $currentFaq = $("#" + div_id);
  const $currentIcon = $("#" + div_id + "num");
  const $currentAnswer = $("#" + div_id + "answer");

  $(".faq-toggle.active-faq").each(function () {
    if (this.id !== div_id) {
      $(this).removeClass("active-faq");
      $(this).find(".expand-div").html('&nbsp;<i class="bi-plus"></i>&nbsp;');
      $(this).find(".answer-div").slideUp("slow");
    }
  });

  const isActive = $currentFaq.toggleClass("active-faq").hasClass("active-faq");
  $currentIcon.html(
    isActive
      ? '&nbsp;<i class="bi-dash"></i>&nbsp;'
      : '&nbsp;<i class="bi-plus"></i>&nbsp;',
  );
  $currentAnswer.slideToggle("slow");
}

function _viewPreviewImage(divid, imageContainer) {
  const viewPix = $("#" + divid).html();
  $("#" + imageContainer)
    .html(viewPix)
    .fadeIn(3000);
}

function _navigateBtn() {
  $(document).ready(function () {
    const container = $(".btn-div-in ul");
    const items = $(".btn-div-in ul li");
    const itemWidth = items.outerWidth(true);
    const itemsCount = items.length;
    let currentIndex = 0;
    let visibleItems = 3;

    $(".right-btn").on("click", function () {
      if (currentIndex < itemsCount - visibleItems) {
        currentIndex++;
        container.css(
          "transform",
          `translateX(-${currentIndex * itemWidth}px)`,
        );
      }
    });

    $(".left-btn").on("click", function () {
      if (currentIndex > 0) {
        currentIndex--;
        container.css(
          "transform",
          `translateX(-${currentIndex * itemWidth}px)`,
        );
      }
    });
  });
}

function _viewPreviewImg(divid) {
  const viewPix = $("#" + divid).html();
  $("#mainProductPixPreviews").html(viewPix).fadeIn(3000);
}

function _slideImages() {
  $(document).ready(function () {
    var container = $(".inner-img-container");
    var imagesCount = $(".each-image-div").length;
    var currentIndex = 0;
    var visibleImages;
    var imageWidth = $(".each-image-div").outerWidth(true);

    function updateVisibleImages() {
      if ($(window).width() <= 767) {
        visibleImages = 1;
      } else {
        visibleImages = 3;
      }
    }

    updateVisibleImages();
    $(window).resize(updateVisibleImages);

    $(document).on("click", ".right-product-btn", function () {
      if (currentIndex < imagesCount - visibleImages) {
        currentIndex++;
        var translateValue = currentIndex * imageWidth;
        container.css("transform", "translateX(-" + translateValue + "px)");
      }
    });

    $(document).on("click", ".left-product-btn", function () {
      if (currentIndex > 0) {
        currentIndex--;
        var translateValue = currentIndex * imageWidth;
        container.css("transform", "translateX(-" + translateValue + "px)");
      }
    });
  });
}

function _countStatistics() {
  var a = 0;
  $(window).scroll(function () {
    var oTop = $(".statistics-div").offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $(".text-cont h2").each(function () {
        var $this = $(this),
          countTo = $this.attr("data-count");
        $({
          countNum: $this.text(),
        }).animate(
          {
            countNum: countTo,
          },
          {
            duration: 10000,
            easing: "swing",
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum + "+"); // Add '+' at the end of the final count
            },
          },
        );
      });
      a = 1;
    }
  });
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
