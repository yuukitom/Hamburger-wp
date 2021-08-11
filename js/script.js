$(document).ready(function () {
  $(".js_navBtn").on("click", function () {
    $(".p-container__right").toggleClass("is-open");
    $("body").toggleClass("is-open");
  });

  /*
  $(".p-pagination__num").on("click", function(){
    $(".now_page").removeClass("now_page");
    $(this).addClass("now_page");

    return false;
  });
  */

});