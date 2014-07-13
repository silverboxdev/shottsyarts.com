<?php
		
	get_header();
		
?>

<!-- Start Main Content -->

<section <?php post_class('default_page'); ?> id="post-<?php the_ID(); ?>">
		
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<!-- WP Content -->
	<div class="inside">
					
	<article class="wp_content span_9" id="wp_content_<?php the_ID(); ?>">
		
		<h1 class="pg_title" style="text-align: left;">
		
		<?php
				if ( is_day() ) :
					printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
				elseif ( is_month() ) :
					printf( __( 'Monthly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
				elseif ( is_year() ) :
					printf( __( 'Yearly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
				else :
					_e( 'Archives', 'twentytwelve' );
				endif;
			?>

		
		</h1>	
		
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