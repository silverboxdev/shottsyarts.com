<div class="post_body">

	<div class="f_image">
	
		<a href="<?= the_permalink(); ?>"><?php echo the_post_thumbnail(array(150,150)); ?></a>

	</div>
	
	<div class="f_copy">
	
		<h1><a href="<?= the_permalink(); ?>" class="post_title"><?= the_title(); ?></a></h1>
		
		<?php echo the_excerpt(); ?>
	
	</div>
		
</div>