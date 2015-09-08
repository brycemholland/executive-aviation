$(document).ready(function(){


  $('.slider-container').each(function(){

  // Variables =================================================

    var $sliderContainer = $(this);
    var $slideIndicatorContainer = $(this).find($('.slide-indicator-container'));
    var $slideIndicator = $(this).find($('.slide-indicator'));
    var $slider = $(this).find($('.slider'));
    var $slide = $(this).find($('.slide'));
    var numberOfSlides = $slider.children().length;
    var slidePercentage = 100/numberOfSlides;

    var index = 0;

  // Setup =================================================
    
    $slider.css("width", numberOfSlides+"00%");
    $slide.css("width", slidePercentage+"%");

    activateIndicator();
    
    // set interval
    var tid = setInterval(runSlider, 10000);

    $slideIndicator.click(function(){
      var thisIndex = $(this).attr("data-index");
      index = thisIndex;
      $slider.css('transform','translate(-'+slidePercentage*index+'%, 0)');
      activateIndicator();
    });

    $sliderContainer.on( "swipeleft", function(){
      if (index != numberOfSlides-1) {
        index = index+1
        $slider.css('transform','translate(-'+slidePercentage*index+'%, 0)');
        activateIndicator();
      }
    });

    $sliderContainer.on( "swiperight", function(){
      if (index != 0) {
        index = index-1
        $slider.css('transform','translate(-'+slidePercentage*index+'%, 0)');
        activateIndicator();
      }
    });

    function activateIndicator(){
      var $currentSlideIndicator = $sliderContainer.find($('.slide-indicator[data-index="' + index + '"]'));
      $slideIndicator.removeClass("indicator-active");
      $currentSlideIndicator.addClass("indicator-active");
    }

    function abortTimer() { // to be called when you want to stop the timer
      clearInterval(tid);
    }
    
    function runSlider() {
      if (index < numberOfSlides-1){
        index++;
        $slider.css('transform','translate(-'+slidePercentage*index+'%, 0)');
        activateIndicator();
      } else{
        index = 0;
        $slider.css('transform','translate(-'+slidePercentage*index+'%, 0)');
        activateIndicator();
      }
    }

  });

});