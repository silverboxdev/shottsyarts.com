<?php
		
	get_header();
		
?>

<!-- Start Main Content -->

<section <?php post_class('default_page'); ?> id="post-<?php the_ID(); ?>">
		
	<!-- WP Content -->
	<div class="inside">
					
	<article class="wp_content span_9" id="wp_content_<?php the_ID(); ?>">
		
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		
		<?php get_template_part('posts', get_post_format()); ?>
		
		<?php endwhile; endif; ?>
			
	</article>
	
	<!-- If Right Sidebar -->
	<aside class="sidebar span_3 last">
		<?php if (is_active_sidebar('blog-sidebar')) : ?>
			<?php dynamic_sidebar('blog-sidebar'); ?>
		<?php endif;?>
	</aside>
	
	</div> <!-- / inside -->
		
</section>


<?php

	get_footer();
	
?>