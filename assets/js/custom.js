jQuery(document).ready(function ($) {
  (function ($) {
    "use strict";
    // Mean Menu JS
    $(".mean-menu").meanmenu({
      meanScreenWidth: "991",
    });

    // Preloader JS
    $(function () {
      $("body").addClass("loaded");
    });

    // Nice Select JS
    $("select").not('.thwvs-select').niceSelect();
    

    // Go To Top JS
    // Scroll Event
    $(window).on("scroll", function () {
      var scrolled = $(window).scrollTop();
      if (scrolled > 300) $(".go-top").addClass("active");
      if (scrolled < 300) $(".go-top").removeClass("active");
    });

    // Click Event JS
    $(".go-top").on("click", function () {
      $("html, body").animate({ scrollTop: "0" }, 100);
    });

    // FAQ Accordion JS
    $(".accordion")
      .find(".accordion-title")
      .on("click", function () {
        // Adds Active Class
        $(this).toggleClass("active");
        // Expand or Collapse This Panel
        $(this).next().slideToggle("fast");
        // Hide The Other Panels
        $(".accordion-content").not($(this).next()).slideUp("fast");
        // Removes Active Class From Other Titles
        $(".accordion-title").not($(this)).removeClass("active");
      });

    // Count Time JS
    function makeTimer() {
      var endTime = new Date("november  30, 2021 17:00:00 PDT");
      var endTime = Date.parse(endTime) / 1000;
      var now = new Date();
      var now = Date.parse(now) / 1000;
      var timeLeft = endTime - now;
      var days = Math.floor(timeLeft / 86400);
      var hours = Math.floor((timeLeft - days * 86400) / 3600);
      var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
      var seconds = Math.floor(
        timeLeft - days * 86400 - hours * 3600 - minutes * 60
      );
      if (hours < "10") {
        hours = "0" + hours;
      }
      if (minutes < "10") {
        minutes = "0" + minutes;
      }
      if (seconds < "10") {
        seconds = "0" + seconds;
      }
      $("#days").html(days + "<span>Days</span>");
      $("#hours").html(hours + "<span>Hours</span>");
      $("#minutes").html(minutes + "<span>Minutes</span>");
      $("#seconds").html(seconds + "<span>Seconds</span>");
    }
    setInterval(function () {
      makeTimer();
    }, 300);

    // Popup Video JS
    $(".popup-youtube, .popup-vimeo").magnificPopup({
      disableOn: 300,
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false,
    });

    // Gallery Popup JS
    $(".gallery-popup").each(function () {
      $(this).magnificPopup({
        delegate: "a",
        type: "image",
        gallery: {
          enabled: true,
        },
      });
    });

    // Tabs JS
    $(".tab ul.tabs").addClass("active").find("> li:eq(0)").addClass("current");
    $(".tab ul.tabs li").on("click", function (g) {
      var tab = $(this).closest(".tab"),
        index = $(this).closest("li").index();
      tab.find("ul.tabs > li").removeClass("current");
      $(this).closest("li").addClass("current");
      tab
        .find(".tab_content")
        .find("div.tabs_item")
        .not("div.tabs_item:eq(" + index + ")")
        .slideUp();
      tab
        .find(".tab_content")
        .find("div.tabs_item:eq(" + index + ")")
        .slideDown();
      g.preventDefault();
    });

    function callbackFunction(resp) {
      if (resp.result === "success") {
        formSuccessSub();
      } else {
        formErrorSub();
      }
    }
    function formSuccessSub() {
      $(".newsletter-form")[0].reset();
      submitMSGSub(true, "Thank you for subscribing!");
      setTimeout(function () {
        $("#validator-newsletter, #validator-newsletter-2").addClass("hide");
      }, 4000);
    }
    function formErrorSub() {
      $(".newsletter-form").addClass("animated shake");
      setTimeout(function () {
        $(".newsletter-form").removeClass("animated shake");
      }, 1000);
    }
    function submitMSGSub(valid, msg) {
      if (valid) {
        var msgClasses = "validation-success";
      } else {
        var msgClasses = "validation-danger";
      }
      $("#validator-newsletter, #validator-newsletter-2")
        .removeClass()
        .addClass(msgClasses)
        .text(msg);
    }

    // Input Plus & Minus Number JS
    $(".input-counter").each(function () {
      var spinner = jQuery(this),
        input = spinner.find('input[type="text"]'),
        btnUp = spinner.find(".plus-btn"),
        btnDown = spinner.find(".minus-btn"),
        min = input.attr("min"),
        max = input.attr("max");

      btnUp.on("click", function () {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
      btnDown.on("click", function () {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
    });

    // Odometer JS
    $(".odometer").appear(function (e) {
      var odo = $(".odometer");
      odo.each(function () {
        var countNumber = $(this).attr("data-count");
        $(this).html(countNumber);
      });
    });

    // Search Popup JS
    $(".close-btn").on("click", function () {
      $(".search-overlay").fadeOut();
      $(".search-btn").show();
      $(".close-btn").removeClass("active");
    });
    $(".search-btn").on("click", function () {
      $(this).hide();
      $(".search-overlay").fadeIn();
      $(".close-btn").addClass("active");
    });

    // Others Option For Responsive JS
    $(".others-option-for-responsive .dot-menu").on("click", function () {
      $(".others-option-for-responsive .container .container").toggleClass(
        "active"
      );
    });

    //WOW JS
    new WOW().init();

    // Product View Slider
    var bigimage = $("#big");
    var thumbs = $("#thumbs");
    //var totalslides = 10;
    var syncedSecondary = true;

    bigimage
      .owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: true,
        autoplay: true,
        dots: false,
        loop: true,
        responsiveRefreshRate: 200,
        rtl: true,
        navText: [
          "<i class='bx bx-left-arrow-alt'></i>",
          "<i class='bx bx-right-arrow-alt'></i>",
        ],
      })
      .on("changed.owl.carousel", syncPosition);

    thumbs
      .on("initialized.owl.carousel", function () {
        thumbs.find(".owl-item").eq(0).addClass("current");
      })
      .owlCarousel({
        items: 5,
        dots: false,
        nav: false,
        rtl: true,
        navText: [
          "<i class='bx bx-left-arrow-alt'></i>",
          "<i class='bx bx-right-arrow-alt'></i>",
        ],
        smartSpeed: 200,
        slideSpeed: 500,
        slideBy: 4,
        responsiveRefreshRate: 100,
      })
      .on("changed.owl.carousel", syncPosition2);

    function syncPosition(el) {
      //if loop is set to false, then you have to uncomment the next line
      //var current = el.item.index;

      //to disable loop, comment this block
      var count = el.item.count - 1;
      var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

      if (current < 0) {
        current = count;
      }
      if (current > count) {
        current = 0;
      }

      //to this
      thumbs
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
      var onscreen = thumbs.find(".owl-item.active").length - 1;
      var start = thumbs.find(".owl-item.active").first().index();
      var end = thumbs.find(".owl-item.active").last().index();

      if (current > end) {
        thumbs.data("owl.carousel").to(current, 100, true);
      }
      if (current < start) {
        thumbs.data("owl.carousel").to(current - onscreen, 100, true);
      }
    }
    function syncPosition2(el) {
      if (syncedSecondary) {
        var number = el.item.index;
        bigimage.data("owl.carousel").to(number, 100, true);
      }
    }
    thumbs.on("click", ".owl-item", function (e) {
      e.preventDefault();
      var number = $(this).index();
      bigimage.data("owl.carousel").to(number, 300, true);
    });

    // Switch Btn
    $("body").append(
      "<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>"
    );
  })(jQuery);

  // function to set a given theme/color-scheme
  function setTheme(themeName) {
    localStorage.setItem("eduon_rtl_theme", themeName);
    document.documentElement.className = themeName;
  }
  // function to toggle between light and dark theme
  function toggleTheme() {
    if (localStorage.getItem("eduon_rtl_theme") === "theme-dark") {
      setTheme("theme-light");
    } else {
      setTheme("theme-dark");
    }
  }
  // Immediately invoked function to set the theme on initial load
  (function () {
    if (localStorage.getItem("eduon_rtl_theme") === "theme-dark") {
      setTheme("theme-dark");
      document.getElementById("slider").checked = false;
    } else {
      setTheme("theme-light");
      document.getElementById("slider").checked = true;
    }
  })();
});

jQuery(document).ready(function ($) {
  // Feedback Wrap JS
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    //direction: 'vertical',
    slidesPerView: 1,
    spaceBetween: 60,
    loop: true,  
    centeredSlides: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '<i class="bx bx-right-arrow-alt" ></i>',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
  
});

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}