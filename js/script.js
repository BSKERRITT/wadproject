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
    $("button").click(function(){
        $("#innerSlider").animate({opacity: '0.5'}).dequeue().effect("bounce", {times: 2}, 500);
    });
});



//button increase size animation
$(document).ready(function() {
   $('.btn-md').mouseenter(function() {
       $(this).animate({
           height: '+=12px'
       });
   });
   $('.btn-md').mouseleave(function() {
       $(this).animate({
           height: '-=12px'
       }); 
   });
});

//Website title animation
$(document).ready(function(){
        $('h1').effect('slide')
    });


//button fade animation - not working well, effects them all at same time.
/*
$(document).ready(function(){
    $('.btn-md').mouseenter(function(){
        $('.btn-md').fadeTo('fast', 1);
    });
        $('.btn-md').mouseleave(function(){
            $('.btn-md').fadeTo('fast', 0.5);
        });
    
    });
*/