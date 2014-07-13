<div class="post_body">

	<div class="f_image">
	
		<?php echo the_post_thumbnail(array(150,150)); ?>

	</div>
	
	<div class="f_copy">
	
		<a href="<?= the_permalink(); ?>" class="post_title"><h1><?= the_title(); ?></h1></a>
		
		<?php echo the_excerpt(); ?>
	
	</div>
		
</div>