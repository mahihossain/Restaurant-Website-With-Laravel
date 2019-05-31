
/* =========================================
                Preloader
============================================ */
$(window).on('load', function () { // makes sure that whole site is loaded
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
});

// $(document).ready(function() {
// 	    $(".fancy_title").lettering();
// 	  });

// logo stick
$(window).scroll(function(e){ 
  var $el = $('.fixedElement'); 

    if ($(this).scrollTop() > 450){ 
    $el.css({'position': 'fixed', 'top': '0px'}); 
  }
    if ($(this).scrollTop() < 450){ 
    $el.css({'position': 'relative', 'top': '0px'}); 
  }

});

/* =========================================
                Animation
============================================ */
// animate on scroll
$(function () {

    new WOW().init();
});

// window.addEventListener('scroll', function(e) {

//   if( $(window).scrollTop() <= 50) {
//       $('.wow').removeClass('animated');
//       $('.wow').removeAttr('style');
//       new WOW().init();
//   }
// });

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function parallax(){
  var para = document.querySelector(".shapes");
  para.style.top = -(window.pageYOffset / 80) + '%'; ///moving the shape div parallax
}
window.addEventListener("scroll",parallax,false)

function parallaxtwo(){
  var para = document.querySelector("#move");
  para.style.top = (- window.pageYOffset/80 +90)  + '%'; ///moving the move div parallax
}
window.addEventListener("scroll",parallaxtwo,false)


// function parallax_right_thai(){
//   var para = document.querySelector(".overlay-right-thai");
//   para.style.top =((window.pageYOffset)/9) + 'px';;
//   console.log("thai", para.style.top )
  
// }
// window.addEventListener("scroll",parallax_right_thai,false)

// function parallax_right_continental(){
//   var para2 = document.querySelector(".overlay-right-continental");
//   para2.style.top = ((window.pageYOffset-2800)/9) + 'px';
//   console.log("con", para2.style.top );
// }
// window.addEventListener("scroll",parallax_right_continental,false)

// function parallax_left(){
//   var para3 = document.querySelector(".overlay-left");
//   para3.style.top = (((window.pageYOffset))/9) + 'px' ;
//   console.log("left", para3.style.top );

// }
// window.addEventListener("scroll",parallax_left,false)



///////////////////////////////////////////////////////////////////////////////////////////smooth scrolling///////////////////////////////////////////////////////////////////////////////

// var html = document.documentElement;
// var body = document.body;

// var scroller = {
//   target:  document.getElementsByTagName("BODY"),
//   ease: 0.05, // <= scroll speed
//   endY: 0,
//   y: 0,
//   resizeRequest: 1,
//   scrollRequest: 0,
// };

// var requestId = null;

// TweenLite.set(scroller.target, {
//   rotation: 0.01,
//   force3D: true
// });

// window.addEventListener("load", onLoad);

// function onLoad() {    
//   updateScroller();  
//   window.focus();
//   window.addEventListener("resize", onResize);
//   document.addEventListener("scroll", onScroll); 
// }

// function updateScroller() {
  
//   var resized = scroller.resizeRequest > 0;
    
//   if (resized) {    
//     var height = scroller.target.clientHeight;
//     body.style.height = height + "px";
//     scroller.resizeRequest = 0;
//   }
      
//   var scrollY = window.pageYOffset || html.scrollTop || body.scrollTop || 0;

//   scroller.endY = scrollY;
//   scroller.y += (scrollY - scroller.y) * scroller.ease;

//   if (Math.abs(scrollY - scroller.y) < 0.05 || resized) {
//     scroller.y = scrollY;
//     scroller.scrollRequest = 0;
//   }
  
//   TweenLite.set(scroller.target, { 
//     y: -scroller.y 
//   });
  
//   requestId = scroller.scrollRequest > 0 ? requestAnimationFrame(updateScroller) : null;
// }

// function onScroll() {
//   scroller.scrollRequest++;
//   if (!requestId) {
//     requestId = requestAnimationFrame(updateScroller);
//   }
// }

// function onResize() {
//   scroller.resizeRequest++;
//   if (!requestId) {
//     requestId = requestAnimationFrame(updateScroller);
//   }
// }

/*Code for changing nav background*/

$(window).scroll(function()
  
    {$('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
  
  });

//////////////////////////////////


