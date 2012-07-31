$(document).ready(function(){
    $('ul#menu-mobile-navigation > li > a').click(function() {
    	event.preventDefault();
    	if($(this).hasClass('active')){
        	closeEntireAccordian();
            $(this).siblings('.sub-menu').slideUp('slow');
            $(this).removeClass('active');
    	}else{
        	closeEntireAccordian();
            $(this).siblings('.sub-menu').slideDown('slow');
            $(this).addClass('active');
        }
    });
    
    function closeEntireAccordian(){
        $('ul.sub-menu').slideUp();
        $('.active').removeClass('active');
    }
}); 

