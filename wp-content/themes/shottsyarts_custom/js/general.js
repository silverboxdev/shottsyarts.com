$(document).ready(function() {

	var theme_path = "/wp-content/themes/shottsyarts_custom";

	$('.mainNav li.menu-item-has-children').hover(function() {
		$(this).toggleClass('hover_nav');
		$(this).find('ul:first').stop(true, true).slideToggle('fast');		
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
	 
});

$(window).load(function() {

});