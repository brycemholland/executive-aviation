$(document).ready(function(){


  // Variables ==========================================

  var form_valid = true;
  var radio_valid = false;
  var error_position;


  // Functions ==========================================

  function validateRadios(_within){
    _within.find($('.input-radio-container')).each(function(){
      var this_name = $(this).attr("name");
      $(this).find($('input')).each(function(){
        if ( $(this).is(":checked") ){
          radio_valid = true;
        }
      });
      if (!radio_valid){
        $('.input-radio-container[name="'+this_name+'"]').find($(".circle")).addClass('validation-error');
        form_valid = false;
      }
    });
  }
  
  function validateText(_within){
    _within.find($('.input-text-container')).find($('input[type="text"]')).each(function(){
      if ( $(this).val() == ""){
        $(this).addClass('validation-error');
        form_valid = false;
      }
    });
  }

  function validateEmail(_within){
    var at = "@";
    var punct = ".";
     _within.find($('.input-text-container')).find($('input[type="email"]')).each(function(){
      var lat = $(this).val().indexOf(at);
      var lstr = $(this).val().length;
      var lpunct = $(this).val().indexOf(punct);
      if ( $(this).val() == ""){
        $(this).addClass('validation-error');
        form_valid = false;
      }

      if ($(this).val().indexOf(at)==-1){
          $(this).addClass('validation-error');
          form_valid = false;
      }

      if ($(this).val().indexOf(at)==-1 || $(this).val().indexOf(at)==0 || $(this).val().indexOf(at)==lstr){
          $(this).addClass('validation-error');
          form_valid = false;
      }

      if ($(this).val().indexOf(punct)==-1 || $(this).val().indexOf(punct)==0 || $(this).val().indexOf(punct)==lstr){
          $(this).addClass('validation-error');
          form_valid = false;
      }

       if ($(this).val().indexOf(at,(lat+1))!=-1){
          $(this).addClass('validation-error');
          form_valid = false;
       }

       if ($(this).val().substring(lat-1,lat)==punct || $(this).val().substring(lat+1,lat+2)==punct){
          $(this).addClass('validation-error');
          form_valid = false;
       }

       if ($(this).val().indexOf(punct,(lat+2))==-1){
          $(this).addClass('validation-error');
          form_valid = false;
       }
      
       if ($(this).val().indexOf(" ")!=-1){
          $(this).addClass('validation-error');
          form_valid = false;
       }
    });
  }

  function validateDropdown(_within){
    _within.find($('.input-dropdown-container')).find($('input[type="text"]')).each(function(){
      if ( $(this).val() == ""){
        $(this).siblings(".input-dropdown").addClass('validation-error');
        form_valid = false;
      }
    });
  }
  

  function validateTextField(_within){
    _within.find($('textarea')).each(function(){
      if ( $(this).val() == ""){
        $(this).addClass('validation-error');
        form_valid = false;
      }
    });
  }

  function validate(_form, _event){
    if ( form_valid == true ) {
      return true;
    } else {
      error_position = _form.find($('.validation-error')).offset().top-50;
      $('html,body').animate({
        scrollTop: error_position
      }, 500);
      _event.preventDefault();
      return false;
    }
  }

  function preventScrollLock(){
    // for Firefox, after page scrolls to .validation-error, allow user to regain control of scrolling
    $('html').on('DOMMouseScroll', function (e) {
      var delta = e.originalEvent.wheelDelta;
      if (delta !== 0) {
        $('html,body').stop();
      }
    });

    // for Chrome, IE, Opera, and Safari, after page scrolls to .validation-error, allow user to regain control of scrolling
    $('html').on('mousewheel', function (e) {
      var delta = e.originalEvent.wheelDelta;
      if (delta !== 0) {
        $('html,body').stop();
      }
    });
  }


  // Validation ==========================================

  $( "form" ).submit(function( event ) {
    var this_form_id = $(this).attr("id");
    var this_form = $('#'+this_form_id);

    // Validate radio buttons
    validateRadios($(this));

    // Validate text inputs
    validateText($(this));

    // Validate email inputs
    validateEmail($(this));

    // Validate dropdowns (which are actually hidden text inputs)
    validateDropdown($(this));

    // Validate text field inputs (aka <testarea> )
    validateTextField($(this));

    // If form isn't valid, stop form submition and add .validation-error classes
    validate(this_form, event);

  });

  // Allow user to scroll, even when form tries to auto-scroll to .validation-error
  preventScrollLock();

});