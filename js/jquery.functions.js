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
    $(".flexbox-nav-wrapper").removeClass("active");
    $(".body-wrapper").removeClass("active");
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
    }
  });

  if ($(".alert-wrapper").hasClass("active")) {
    setTimeout(function () {
      $(".alert-wrapper").removeClass("active");
      $("body").removeClass("no-scroll");
    }, 8000);
  }

  // sticky nav

  $(window).scroll(function () {
    if ($(window).scrollTop() > 200) {
      $("nav.section-header").addClass("scrolled");
    }
    if ($(window).scrollTop() < 200) {
      $("nav.section-header").removeClass("scrolled");
    }
  });

  // -------------------------- //
});
