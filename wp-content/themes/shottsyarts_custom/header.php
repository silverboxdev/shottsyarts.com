<?php

	global $twisted;

	if($twisted == "on") {
		$body_class = "twisted";
	}
	else if($graphic_novel == "on") {
		$body_class = "graphic_novel";
	}
	else {
		$body_class = "non-twisted";
	}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
	
		<title><?php wp_title('|', 1, 'right') ?><?php bloginfo('name'); ?></title>
		
		<!-- Meta -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="keywords" content="" />
		<meta name="author" content="Silverbox Development">
		<meta name="robots" content="index,follow" />
		
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Favicon -->
		<link rel="icon" type="image/x-icon" href="/favicon.ico" />
		
		<!-- Styles -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Overlock:400,700,900,400italic,700italic,900italic|Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>
		
		<?php wp_head(); ?>
		
	</head>
	
	<body class="<?php echo $body_class; ?>">
		
		<div class="body_wrapper">
		
			<!-- Header -->
				
			<header class="masthead">
			
				<div class="head_wrap">
				
				<div class="inside">
				
					<div class="social_icons">
						<a href="https://www.facebook.com/ShottsyArts" target="_blank" class="s_icon fb">Facebook</a>
						<a href="https://twitter.com/Shottsy85" target="_blank" class="s_icon twitter">Twitter</a>
						<a href="http://shottsy85.deviantart.com" target="_blank" class="s_icon deviantart">DeviantArt</a>
					</div>
				
					<div class="logo">
						<a href="/" class="full_screen_logo">
						<?php if($twisted != "on") { ?>
							<img src="<?= IMAGES; ?>/logo_responsive.jpg" alt="Shottsy Arts" class="mobile_only" />
						<?php } else { ?>
							<img src="<?= IMAGES; ?>/logo_twisted-tails.jpg" alt="Shottsy Arts" class="mobile_only" />
						<?php } ?>
						</a>
					</div>
				
				</div> <!-- /inside -->
				
				</div> <!-- /head_wrap-->
				
				<div class="trigger_contain">
					<a href="#" class="navTrigger">Trigger</a>
				</div>
				
			</header>
			
			<!-- Main Navigation -->
			<nav class="mainNav">
				<div class="inside">
				<?php 
					wp_nav_menu(array(
						'theme_location' => 'top-menu'
					)); 
				?>
				</div>
			</nav>
			
			<nav class="mobileNav">
				<ul>
					<?php 
						wp_nav_menu(array(
							'theme_location' => 'top-menu'
						)); 
					?>	
				</ul>
			</nav>
			
			
	
