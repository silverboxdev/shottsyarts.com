<?php

	get_header();
		
?>

<!-- Start Main Content -->

<section <?php post_class('default_page'); ?> id="post-<?php the_ID(); ?>">
		
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
	<!-- WP Content -->
	<div class="inside">
					
		<article class="wp_content span_12 omega" id="wp_content_<?php the_ID(); ?>" style="margin-top: -1em;">
		
			<h2><?= the_title(); ?></h2>
			
			<?php the_content(); ?>
		
		</article>
	
	</div> <!-- / inside -->
	
	
	<?php endwhile; endif; ?>
		
</section>

<?php

	get_footer();
	
?>