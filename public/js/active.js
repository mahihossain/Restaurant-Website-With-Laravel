
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

$(window).resize(function(){

       if ($(window).width() <= 1920) {  

			             $(window).scroll(function(e){ 
			  var $el = $('.fixedElement'); 

			    if ($(this).scrollTop() > 1050){ 
			    $el.css({'position': 'fixed', 'top': '0px'}); 
			  }
			    if ($(this).scrollTop() < 1050){ 
			    $el.css({'position': 'relative', 'top': '0px'}); 
			  }

			});

       }     

});