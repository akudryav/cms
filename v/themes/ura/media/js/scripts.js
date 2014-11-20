    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
		    controlNav: false, 
        start: function(slider){
          $('body').removeClass('loading');
        }
      }); 
	  
    });
	
    $(window).load(function(){
		
	  $('#gthumbs').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemWidth: 284,
		itemMargin: 5,
		asNavFor: '#gslider'
	  });
	  $('#gslider').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		sync: "#gthumbs"
	  });
		
    });