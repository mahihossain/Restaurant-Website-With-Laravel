
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
$(function () {  
  $("#reviews").owlCarousel({
      items:7,
          margin:340,
    
    // autoWidth:true,
   
      autoplay: false,
      smartSpeed: 900,
      loop: true,
      autoplayHoverPause: true,
      nav: true,
      dots: true,
      navText: ['<i class="fas fa-angle-double-left"></i>', '<i class="fas fa-angle-double-right"></i>'],
      responsive: {
          // breakpoint from 0 up
           0:{
          items:1
      },
      600:{
          items:4
      },
      1000:{
          items:7
      }
      }
  });
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
