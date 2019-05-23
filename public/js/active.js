
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
          margin:30,
    
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

$(document).ready(function(){
  $(".reviews").each(function(){
    var This = $(this) ;
    console.log(This);
    var Nums = This.find(".panel").length;
     console.log(Nums);
    This.find(".panel:first").addClass("PanelAct");
    This.append("<div class='control'></div>") ;
    This.find(".panel").not(".PanelAct")
      .css("left","100%")
    for ( i=0 ; i<Nums ; i++) {
      This.find(".control").append("<span></span>") ;
    }
    This.find(".control span:eq(0)").addClass("ContActive");
    
    This.find(".control span").click(Reviews);
    
    function Reviews(){
      var loc = $(this).index();
      var ActivLoc = This.find(".ContActive").index();

      $(this).addClass("ContActive")
        .siblings().removeAttr("class");
      
      if ( loc > ActivLoc ) {
        var Dire = '100%'
        var IDire = '-100%'
      }
      if ( loc < ActivLoc ) {
        var Dire = '-100%'
        var IDire = '100%'
      }

      This.find(".panel").not(".PanelAct")
      .css("left",Dire) ;
      This.find(".panel:eq("+loc+")")
      .animate({'left':'0'},speed)
      .addClass("PanelAct")
      .siblings(".PanelAct")
      .removeClass("PanelAct")
      .animate({'left':IDire},speed);
    }
  });
});
  