$(document).ready(function(){

    $('.accordion-header').click(function(e){	    
        e.preventDefault();
        if($(this).find('.accordion-body').is(":visible")){
        	$(this).removeClass('open');
	        $(this).closest('li').find('.icon').removeClass('open');
	    	$(this).closest('li').find('.accordion-icon-closed').hide();
	    	$(this).closest('li').find('.accordion-icon-open').show();
	    }
	    else {
		    var accordion_header = $(this).parent();
		    var url = $(this).parent().data('url');
	    	$(accordion_header).find('.accordion-body').load(url);
	    	$('html, body').animate({
	         	scrollTop: $(this).offset().top - 56
	         }, 300);
	        $(this).addClass('open');	         
	    	$(this).closest('li').find('.icon').addClass('open');
	    	$(this).closest('li').find('.accordion-icon-open').hide();
	    	$(this).closest('li').find('.accordion-icon-closed').show();
	    }
        $(this).closest('li').find('.accordion-body').slideToggle();
    });
    
    $('#navigation li a.hash').click(function(e){
        e.preventDefault();
    	var action = $(this).data('action') || null;

        if($(action).closest('li').find('.accordion-body').is(":visible")){
	    	$(action).closest('li').find('.accordion-icon-closed').hide();
	    	$(action).closest('li').find('.accordion-icon-open').show();
	    }
	    else {
	    	$(action).closest('li').find('.accordion-icon-open').hide();
	    	$(action).closest('li').find('.accordion-icon-closed').show();
	    }
        $(action).closest('li').find('.accordion-body').slideToggle();
        $('html, body').animate({
	     		scrollTop: $(action).offset().top - 56
	     }, 300);
    });
     
});