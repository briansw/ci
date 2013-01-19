$(document).ready(function(){

    $('.accordion-header').click(function(e){
        e.preventDefault();
        if($(this).closest('li').find('.accordion-body').is(":visible")){
        	$(this).removeClass('open');
	        $(this).closest('li').find('.icon').removeClass('open');
	    	$(this).closest('li').find('.accordion-icon-closed').hide();
	    	$(this).closest('li').find('.accordion-icon-open').show();
	    }
	    else {
	    	$('html, body').animate({
	         	scrollTop: $(this).offset().top
	         }, 300);
	        $(this).addClass('open');	         
	    	$(this).closest('li').find('.icon').addClass('open');
	    	$(this).closest('li').find('.accordion-icon-open').hide();
	    	$(this).closest('li').find('.accordion-icon-closed').show();
	    }
        $(this).closest('li').find('.accordion-body').slideToggle();
    });
    
    $('#navigation li a').click(function(e){
        e.preventDefault();
    	var action = $(this).data('action');

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
	     	scrollTop: $(action).offset().top
	     }, 300);
    });    
    
});