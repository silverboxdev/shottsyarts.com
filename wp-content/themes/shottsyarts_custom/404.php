<?php
	/* Template for 404 Page */
	get_header();

?>		
<!-- Start Main Content -->

<section <?php post_class('default_page'); ?> id="post-<?php the_ID(); ?>">
		
	
	<!-- WP Content -->
	<div class="inside">
					
	<article class="wp_content <?= $sidebar_class; ?>" id="wp_content_<?php the_ID(); ?>">
		
		<div class="span_6">
			<img src="<?= IMAGES; ?>/waffles.jpg" alt="Waffles" />
		</div>
		
		<div class="span_6 omega">
			
			<h1>Page Not Found</h1>
			
			<h4>Oops. The page you are looking for doesn't exist. Please try our main navigation.</h4>
			
			<nav class="internal_nav">
				<?php 
					wp_nav_menu(array(
						'theme_location' => 'top-menu'
					)); 
				?>
			</nav>
			
		</div>
			
	</article>
	
	
	</div> <!-- / inside -->
	
		
</section>

<?php

	get_footer();
	
?>