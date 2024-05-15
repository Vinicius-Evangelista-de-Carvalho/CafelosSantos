$(window).load(function(){
        $('.botones-sociales .social').mouseenter(function(){
        	$(this).stop();
        	$(this).animate({width:'160'}, 500,'easeOutBounce',function(){});
        });
        $('.botones-sociales .social').mouseleave(function(){
	        $(this).stop();
	        $(this).animate({width:'43'}, 500, 'easeOutBounce',function(){});
	    });
});

