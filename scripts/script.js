$(document).ready(function () {
  $(".products").children(".product:first-child").addClass("active");
  $(".menu")
    .children("div:first-child")
    .children("li:first-child")
    .children("button:first-child")
    .addClass("active_img");

  $(".menubtn").click(function () {
    var hrefId = $(this).attr("href");
    $(this).addClass("active_img");
    $("#" + hrefId).addClass("active");
    $(".products")
      .children(".product")
      .each(function () {
        if ($(this).hasClass("active") && this.id != hrefId) {
          $(this).removeClass("active");
        }
      });
    $(".menu")
      .children("div")
      .children("li")
      .children("button")
      .each(function () {
        if ($(this).hasClass("active_img") && $(this).attr("href") != hrefId) {
          $(this).removeClass("active_img");
        }
      });
  });
});
$(document).ready(function () {
  $(".cross").hide();
  $(".menu").hide();
  $(".hamburger").click(function () {
    $(".hamburger").hide();

    $(".cross").show();

    $(".menu").slideToggle("slow", function () {});
  });

  $(".cross").click(function () {
    $(".menu").slideToggle("slow", function () {
      $(".hamburger").show();

      $(".cross").hide();
    });
  });
});
