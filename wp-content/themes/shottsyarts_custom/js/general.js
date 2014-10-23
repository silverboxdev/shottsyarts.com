jQuery(document).ready(function($) {

	var theme_path = "/wp-content/themes/shottsyarts_custom";

	$('.mainNav li.menu-item-has-children').hover(function() {
		$(this).toggleClass('hover_nav');
		$(this).find('ul:first').stop(true, true).slideToggle('fast');		
	});
	
	// Scroll To Top
	
	$(window).scroll(function(event) {
		var scrollTop = $(window).scrollTop();
		if(scrollTop > 700) {
			$('.scroll_top').fadeIn(400);
		}
		else {
			$('.scroll_top').fadeOut(400);
		}
	});

	 
	 $('a.scroll_top').click(function(e) {
	 	$("html, body").animate({ scrollTop: "0" }, 800);
	 	e.preventDefault();
	 });
	
	// Accordion
	
	var allPanels = $('.accordion > .accord_row > dd').hide();
   
	$('.accordion > .accord_row > dt > a').click(function() {
		$('.accordion > .accord_row > dt > a').removeClass('active_question');
		$(this).addClass('active_question');
		allPanels.slideUp();
		$(this).parent().next().slideDown(600);
		return false;
	 });
	 
	 // On Page Load Open First Accordion
	 
	 $('.accordion > .accord_row > dt > a').first().trigger('click');
	 
	 // Trigger Click on H4
	 
	 $('.accordion > .accord_row > dt > h4').click(function() {
		 $(this).parent().children('a').trigger('click');
		 return false;
	 });
	 
	 // Mobile Nav Trigger
	 
	 $('.navTrigger').click(function(e) {
		 $(this).toggleClass('triggerActive');
		 $('.mobileNav').slideToggle(650);
		 e.preventDefault();
	 });
	 
	 // Mobile Dropdowns
	 $('.mobileNav li.menu-item-has-children ul li.menu-item-has-children').css('position', 'relative').append('<span class="see_more"><img src="' + theme_path + '/images/btn-plus.png" alt="See More" /></span>');
	 
	 $('.mobileNav li.menu-item-has-children ul > li.menu-item-has-children').find('a:first').click(function(e) {
	 	$(this).parent().find('ul:first').stop().slideToggle(600);
	 	e.preventDefault();
	 });
	 
	 // Mobile - Do Not Link
	  $('nav.mainNav ul li.no_link').find('a:first').click(function(e) {
		 e.preventDefault();
	 });
	 
	 $('.mobileNav ul li.menu-item-29').find('a:first').hide();
	 
	 // Graphic Novel Fluid Scroll
	 
	 $('section.post-380 h2').each(function(e) {
		
		var set_value = $(this).attr('data-locate');
		var set_title = $(this).attr('data-title');
		
		if(set_value !== undefined) {
		
			$(this).wrap('<a name="'+set_value+'" class="not_real_link"></a>');
		
			$('div.anchor_links').append('<a href="#'+set_value+'" class="'+set_value+' char_nav">' + set_title +  '</a> ');
		
		} else {
			return false;
		}
		
	});
	 
	 $('section.post-380').localScroll({
	 	offset: { top: -40 }
	 });

	 if(window.location.hash) {
		// Fragment exists
		$(window).scrollTop(0);
		var hash = window.location.hash;
		hash = hash.substring(1);
		
		$('a.' + hash).trigger('click');
		
	 }
	 
	 // window resize
	 
	 var $window = $(window);
     
    function checkWidth() {
	    
	    var windowsize = $window.width();
        
        // IF window is Wide
        if (windowsize > 768) {        		
				$('.mainNav').show();
				$('.mobileNav').hide();
				
			}
			// IF Window is Narrow
			else {
				$('.mainNav').hide();
			}		
			
    }
    
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);
	 
});