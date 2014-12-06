<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head> 
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
		
		<!-- Remy Sharp Shim --> 
		<!--[if lt IE 9]> 
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
		<![endif]-->  
		
		<meta name="robots" content="noindex, nofollow" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	
	
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
		<link href='http://fonts.googleapis.com/css?family=Dosis:400,800' rel='stylesheet' type='text/css'>
		
		<?php /*?> Always have wp_head() just before the closing </head>
	   tag of your theme. Many plugins use this hook to add 
       elements to <head> such as styles, scripts, and meta tags.
	  <?php */?>
     <?php wp_head(); ?> 
	</head>
	<body <?php body_class(); ?>> 
		<div id="wrapper"> <!--opening #wrapper -->
			<header>
				<h1>
				  <a href="<?php echo get_option('home'); ?>">
					<span><?php bloginfo('name'); ?> </span><!-- for SEO -->
					<img src="<?php bloginfo('template_url'); ?>/images/myimg2.JPG" id="logo"  
					  alt="My Logo"> <!-- for screen readers --> 	
				  </a>
				</h1> 
               <div class="search">
					<?php get_search_form(); ?> 
					<p>Today is: <?php the_date('Y-m-d', '<h2>', '</h2>'); ?></p>
                     
                 </div>
                 
                 <nav> 
						<?php wp_nav_menu( array( 
							'theme_location' => 'main-menu' ,
							'menu' => 'Main Menu' ,
							'container'  => 'ul', 

						) ); ?> 
				</nav>
			</header>
			
			
			 
			 