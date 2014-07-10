<?php
	/* Template Name: Homepage */
	get_header();
		
	$layer_slide_id = rwmb_meta('silverbox_slider');
	
	if($layer_slide_id == "" || !(isset($layer_slide_id))) {
		$layer_slide_id = 1;
	}
?>

<script type="text/javascript" language="javascript">
    jQuery(document).ready(function($) {
       $('.flexslider').flexslider({
            animation: "slide",
            controlNav: false,
            slideshow: false,
            pauseOnAction: "true",
            prevText: "",
            nextText: ""
          });
    });
</script>

<!-- Start Main Content -->

<section <?php post_class('default_page'); ?> id="post-<?php the_ID(); ?>">
		
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
	<!-- Layer Slider -->
	<div class="feature">
		<?php layerslider($layer_slide_id); ?>
	</div>

	<!-- WP Content -->
	<div class="inside">
					
	<article class="wp_content <?= $sidebar_class; ?>" id="wp_content_<?php the_ID(); ?>">
		<div class="span_6">
			<?php the_content(); ?>
		</div>
		
		<div class="span_6 omega">
			<div class="flexslider">
				<ul class="slides">
			<?php
			$args=array(
			    'post_type' => 'comics',
			    'post_status' => 'publish',
			    'posts_per_page' => 5,
			    'orderby' => 'rand',
			);
			
			$home_feature_query = new WP_Query($args);
			
			while ($home_feature_query->have_posts()) : $home_feature_query->the_post(); ?>
				
				<li>
					<? echo the_post_thumbnail('full'); ?>
					<h2 class="flex-caption yellow_header"><?= the_title();?></h2>
				</li>
			
			<?php 
				endwhile;
				wp_reset_query();
			?>
				</ul>
				<div class=""
			</div>
		</div>
			
	</article>
	
	
	</div> <!-- / inside -->
	
	
	<?php endwhile; endif; ?>
		
</section>

<?php

	get_footer();
	
?>