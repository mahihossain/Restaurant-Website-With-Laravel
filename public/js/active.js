
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

    if ($(this).scrollTop() > 650){ 
    $el.css({'position': 'fixed', 'top': '0px'}); 
  }
    if ($(this).scrollTop() < 650){ 
    $el.css({'position': 'relative', 'top': '0px'}); 
  }

});

/* =========================================
                Review section added
============================================ */


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
//   para.style.top = 5 + '%';
//   console.log("thai", para.style.top )
// }
// window.addEventListener("scroll",parallax_right_thai,false)

// function parallax_right_continental(){
//   var para = document.querySelector(".overlay-right-continental");
//   para.style.top = (window.pageYOffset/9) + 'px';
// }
// window.addEventListener("scroll",parallax_right_continental,false)

// function parallax_left(){
//   var para = document.querySelector(".overlay-left");
//   para.style.top = (window.pageYOffset/10) + 'px' ;
// }
// window.addEventListener("scroll",parallax_left,false)



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
