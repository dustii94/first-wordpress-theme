jQuery(document).ready(function($) {
  var alterClass = function() {
    var ww = document.body.clientWidth;
    if (ww < 500) {
      $('.box').removeClass('col-4');
    } else if (ww >= 401) {
      $('.box').addClass('col-4');
    };
  };
  $(window).resize(function(){
    alterClass();
  });
  //Fire it when the page first loads:
  alterClass();
});
