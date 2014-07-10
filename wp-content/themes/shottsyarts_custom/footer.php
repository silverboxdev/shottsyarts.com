
<footer class="footer">

	<div class="inside">

	<div class="span_6 contact_us">
		<div class="contact_form">
			<h2>Contact Us:</h2>
			<?php echo do_shortcode('[contact-form-7 id="36" title="Footer Contact Form"]'); ?>
		</div>
	</div>
	
	<div class="span_6 omega">
		<?php 
		$args = array('posts_per_page' => '1', 'post_type' => 'post');
		$loop = new WP_Query( $args );
		
		if(have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
		<div class="recent_post">
			<h2><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
			<div class="post_content">
				<?= the_excerpt(); ?>
			</div>
			<div class="more_button">
				<a href="<?= the_permalink(); ?>" class="button yellow_button">Read More</a>
			</div>
		</div>
		
		<?php endwhile; endif; ?>
			
		<?php wp_reset_query(); ?>
		
	</div>
	
	<div class="footer_widgets">
		<?php get_sidebar('footer'); ?>
	</div>
	
	<div class="bottom_footer">
	
		<div class="copyright span_6">
		
			<p class="copyright_text">
			<?php if (is_active_sidebar('copyright-widget')) : ?>
			<?php dynamic_sidebar('copyright-widget'); ?>
			<?php else: ?>
			Copyright <?= date('Y'); ?>
			<?php endif; ?>
			</p>
			
		</div>
		
		<div class="span_6 omega social_icons">
			<div class="fr">
				<a href="#" class="s_icon fb">Facebook</a>
				<a href="#" class="s_icon twitter">Twitter</a>
				<a href="#" class="s_icon youtube">YouTube</a>
			</div>
		</div>
		
	</div> <!-- bottom_footer -->

	</div> <!-- /inside -->
	
</footer>

</div>


<? wp_footer(); ?>

</body>
</html>