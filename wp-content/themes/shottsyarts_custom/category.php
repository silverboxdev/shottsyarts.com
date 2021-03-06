<?php
		
	get_header();
		
?>

<!-- Start Main Content -->

<section <?php post_class('default_page'); ?> id="post-<?php the_ID(); ?>">
		
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<!-- WP Content -->
	<div class="inside">
					
	<article class="wp_content span_9" id="wp_content_<?php the_ID(); ?>">
				
			<h1 class="pg_title" style="text-align: left;"><?php single_cat_title(__('Showing Posts From: ', 'adaptive-framework'), true); ?></h1>	

		<?php get_template_part('posts', get_post_format()); ?>
			
	</article>
	
	<!-- If Right Sidebar -->
	<aside class="sidebar span_3 last">
		<?php if (is_active_sidebar('blog-sidebar')) : ?>
			<?php dynamic_sidebar('blog-sidebar'); ?>
		<?php endif;?>
	</aside>
	
	<div class="post_navigation">
		
		<?php posts_nav_link(); ?>
		
	</div>
	
		
	</div> <!-- / inside -->
	
	
	<?php endwhile; endif; ?>
		
</section>


<?php

	get_footer();
	
?>