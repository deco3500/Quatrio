$(document).scroll(function() { 
   if($(window).scrollTop() < 200) {
     $(".btt").hide("fast");
   } else {
       $(".btt").show("fast");
   }
});