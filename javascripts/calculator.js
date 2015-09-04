$(document).ready(function(){

// Variables =================================================

  var $input = $(".field > input");
  var $dropdown = $(".input-dropdown-container > input");
  var $dropdownOption = $(".dropdown-option");
  var $days = $(".input-text-container > input");
  var $resultNumber = $(".result-number");
  var $button = $(".button");

  var values = {
    "beachjet" : 500,
    "king-air" : 500,
    "barron-58" : 700,
    "bonanza-33" : 700,
    "atlanta" : 300,
    "austin" : 400,
    "chicago" : 600,
    "dallas" : 200,
    "denver" : 500,
    "los-angeles" : 800,
    "miami" : 700,
    "nyc" : 800,
    "orlando" : 600,
    "portland" : 900,
    "slc" : 700,
    "san-francisco" : 800,
    "seattle" : 1000,
    "dc" : 800
  };

  var estimate = 200;
  var valuesIn = true;

// Setup =================================================
  
  function updatePrice(){
    estimate = 0;
    valuesIn = true;
    $dropdown.each(function(){
      if ($(this).val().length > 0){
        estimate = estimate + (values[$(this).val()]);
        //console.log(values[$(this).val()]);
      } else {
        valuesIn = false;
      }
    })
    estimate = estimate + ($days.val()*200);
    if (valuesIn == true){ 
      $resultNumber.text("Estimated Cost: $"+estimate);
    } else {
      $resultNumber.text("See Estimate Here");
    }
  }

  $dropdownOption.click(function(){
    updatePrice();
  });

  $input.change(function(){
    updatePrice();
  });
 

});