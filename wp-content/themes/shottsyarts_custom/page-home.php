<?php
	/* Template Name: Homepage */
	get_header();
	
	// Grab Sidebar Selection
	
	$sidebar_selection = rwmb_meta( 'silverbox_selection' );
		
	// Grab Sidebar Position
	
	$sidebar_position = rwmb_meta( 'silverbox_position' );
	
	if($sidebar_position == "no_sidebar" || $sidebar_position == "") {
		$sidebar_class = "span_12 last";
	}
	
	elseif($sidebar_position == "left_sidebar") {
		$sidebar_class = "span_8 last";
	}
	
	else {
		$sidebar_class = "span_8";
	}
	
	$layer_slide_id = rwmb_meta('silverbox_slider');
	
	if($layer_slide_id == "" || !(isset($layer_slide_id))) {
		$layer_slide_id = 1;
	}
?>

<!-- Start Main Content -->

<section <?php post_class('default_page'); ?> id="post-<?php the_ID(); ?>">
		
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
	<!-- Layer Slider -->
	<div class="feature">
		<?php layerslider($layer_slide_id); ?>
	</div>

	<!-- WP Content -->
	<div class="inside">
	
	<!-- If Left Sidebar -->
	<?php if($sidebar_position == "left_sidebar") { ?>
	
		<aside class="sidebar span_4">
			
			<?php if (is_active_sidebar($sidebar_selection)) : ?>
				<?php dynamic_sidebar($sidebar_selection); ?>
			<?php endif;?>
			
		</aside>
	<? } ?>
					
	<article class="wp_content <?= $sidebar_class; ?>" id="wp_content_<?php the_ID(); ?>">
			
		<?php the_content(); ?>
			
	</article>
	
	<!-- If Right Sidebar -->
	<?php if($sidebar_position == "right_sidebar") { ?>
		<aside class="sidebar span_4 last">
			<?php if (is_active_sidebar($sidebar_selection)) : ?>
				<?php dynamic_sidebar($sidebar_selection); ?>
			<?php endif;?>
		</aside>
	<? } ?>
	
	</div> <!-- / inside -->
	
	
	<?php endwhile; endif; ?>
		
</section>

<?php

	get_footer();
	
?>