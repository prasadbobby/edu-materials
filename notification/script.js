$(document).ready(function() {
  feather.replace();

  $(".is-save").on("click", function() {
    $(this).addClass("is-loading");
    setTimeout(function() {
      $(".is-save")
        .removeClass("is-loading")
        .addClass("is-disabled");
      $(".form-wrapper, .success-block").toggleClass("is-hidden");
    }, 2000);
    setTimeout(function() {
      $(".success-block").addClass("is-active");
    }, 2500);

    setTimeout(function() {
      $(".reset").removeClass("is-hidden");
    }, 3000);
  });

  //
  $(".reset").on("click", function() {
    $(this).addClass("is-hidden");
    $(".is-save").removeClass("is-disabled");
    $(".form-wrapper, .success-block").toggleClass("is-hidden");
    $(".success-block").removeClass("is-active");
  });
});