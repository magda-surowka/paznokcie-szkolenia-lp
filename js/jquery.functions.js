$(document).ready(function () {
  // -------------------------- //

  $("#nav-button").click(function () {
    $(".body-wrapper").addClass("active");
    $(".flexbox-nav-wrapper").addClass("active");
    setTimeout(function () {
      $(".flexbox-nav").addClass("active");
    }, 200);
  });

  $("#nav-button-close").click(function () {
      $(".body-wrapper").removeClass("active");
    $(".flexbox-nav-wrapper").removeClass("active");
    $(".flexbox-nav").removeClass("active");
  });

  function toggleAlert() {
    $(".alert-wrapper").toggleClass("active");
    $("body").removeClass("no-scroll");
  }

  function toggleBurgerMenu() {
    $(".flexbox-nav-wrapper").toggleClass("active");
    $("body").removeClass("no-scroll");
    $(".flexbox-nav").toggleClass("active");
  }

  function toggleOfferButtonCalendar() {
    $(".modal-service-wrapper").toggleClass("active");
    $("body").removeClass("no-scroll");
    $(".modal-service").toggleClass("active");
  }

  $("#alertDismiss").click(function () {
    toggleAlert();
  });

  $(document).keyup(function (e) {
    if (e.keyCode === 27) {
      if ($(".alert-wrapper").hasClass("active")) {
        toggleAlert();
      }

      if ($(".flexbox-nav-wrapper").hasClass("active")) {
        toggleBurgerMenu();
      }

      if ($(".modal-service-wrapper").hasClass("active")) {
        toggleOfferButtonCalendar();
      }

    }
  });

  if ($(".alert-wrapper").hasClass("active")) {
    setTimeout(function () {
      $(".alert-wrapper").removeClass("active");
      $("body").removeClass("no-scroll");
    }, 8000);
  }

  // modal

  $("#offer-calendar-button").click(function () {
      $(".modal-service-wrapper").addClass("active");
      $(".modal-service").addClass("active");
      $("body").addClass("no-scroll");
  });

  $("#offer-calendar-button-close").click(function () {
      $(".modal-service-wrapper").removeClass("active");
      $(".modal-service").removeClass("active");
      $("body").removeClass("no-scroll");
  });

  // sticky nav

  $(window).scroll(function () {
    if ($(window).scrollTop() > 200) {
      $("nav.section-header").addClass("scrolled");
    }
    if ($(window).scrollTop() < 200) {
      $("nav.section-header").removeClass("scrolled");
    }
  });

    // smooth scroll

    $('*[data-scroll="scroll"]').click(function () {
        $(".flexbox-nav-wrapper").removeClass("active");
        $(".flexbox-nav").removeClass("active");
        $(".modal-service-wrapper").removeClass("active")
        $(".modal-service").removeClass("active");
        $("body").removeClass("no-scroll");
    
        $("html, body").animate(
          {
            scrollTop: $($(this).attr("href")).offset().top,
          },
          900
        );
      });

  // -------------------------- //
});
