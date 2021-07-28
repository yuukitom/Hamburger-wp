$(document).ready(function(){
  $(".js_navBtn").on("click", function(){
    $(".p-container__right").toggleClass("is-open");
    $("body").toggleClass("is-open");
  });

  $(".p-pagination__num").on("click", function(){
    $(".current").removeClass("current");
    $(this).addClass("current");

    return false;
  });

});