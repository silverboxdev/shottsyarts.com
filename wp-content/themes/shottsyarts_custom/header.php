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
		
		<!-- Styles -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		
		<!-- Typekit -->
		
		<?php wp_head(); ?>
		
	</head>
	
	<body>
		
		<div class="body_wrapper">
		
			<!-- Header -->
				
			<header class="masthead">
			
				<div class="head_wrap">
				
				<div class="inside">
				
					<div class="social_icons">
						<a href="#" class="s_icon fb">Facebook</a>
						<a href="#" class="s_icon twitter">Twitter</a>
						<a href="#" class="s_icon youtube">YouTube</a>
					</div>
				
					<div class="logo">
						<a href="/">Shottsy Arts</a>
					</div>
				
				</div> <!-- /inside -->
				
				</div> <!-- /head_wrap-->
				
				<a href="#" class="navTrigger mobile_only">Trigger</a>
			</header>
			
			<!-- Main Navigation -->
			<nav class="mainNav">
				<ul>
					<?php 
						wp_nav_menu(array(
							'theme_location' => 'top-menu'
						)); 
					?>	
				</ul>
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
			
			
	
