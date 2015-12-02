var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }

xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById('text').innerHTML=xmlhttp.responseText;
    }

   xmlhttp.open("GET", 'data.php?id=' + id,true);
   xmlhttp.send();
};

//effects for facts text
$(document).ready(function(){
    $("#com, #sp, #his, #ran").click(function(){
        $("#innerSlider").effect("bounce", {times: 3}, 700);
    });
});

//button increase size animation
$(document).ready(function() {
   $('.btn-md').mouseenter(function() {
       $(this).animate({height: '+=5px'}, 'fast').fadeTo('slow', 0.5);
   });
   $('.btn-md').mouseleave(function() {
       $(this).animate({height: '-=5px'}, 'fast').fadeTo('slow', 1); 
   });
});

//Website title animation
$(document).ready(function(){
        $('h1').effect('slide')
    });


//functions to change body image when category button is pressed
/*
$("#com").click(function() {
    $("body").css("backgroundImage", "url(/images/comedy.jpg)");
});

$("#sp").click(function() {
    $("body").css("backgroundImage", "url(/images/sport.jpg)");
});
*/

(function( $ ){

  $.fn.fitText = function( kompressor, options ) {

    // Setup options
    var compressor = kompressor || 1,
        settings = $.extend({
          'minFontSize' : Number.NEGATIVE_INFINITY,
          'maxFontSize' : Number.POSITIVE_INFINITY
        }, options);

    return this.each(function(){

      // Store the object
      var $this = $(this);

      // Resizer() resizes items based on the object width divided by the compressor * 10
      var resizer = function () {
        $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
      };

      // Call once to set.
      resizer();

      // Call on resize. Opera debounces their resize by default.
      $(window).on('resize.fittext orientationchange.fittext', resizer);

    });

  };

})( jQuery );

