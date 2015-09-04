$(document).ready(function(){

// Variables =================================================

  var $footer = $(".footer");
  var $main = $(".main-container");
  var $navbar = $(".navbar");
  var $header = $(".header");
  var $slider = $(".slider-container");
  var $shadow = $(".shadow");


// Setup =================================================
  
  function adjustFooter(){
    $main.css("min-height", ($main.height()-$navbar.height()-$slider.height()-$footer.height()-24)+"px" );
  }

  adjustFooter();
  $(window).resize(function(){
    adjustFooter();
  });
  $( window ).on( "orientationchange", function() {
    adjustFooter();
  });

});