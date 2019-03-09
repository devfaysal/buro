<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<header class="clear-fixed transition">
    	<div class="fluid-container">
        	<div class="content-row">
            	<div class="grid-12 text-center">
                	<a class="branding" href="<?php echo get_site_url(); ?>"><img class="transition" src="<?php echo get_template_directory_uri(); ?>/image/chrd.jpg" alt="BURO CHRD"></a>
                    <a class="menu transition" href="javascript:void(0)"><span class="hamburger-menu"></span> menu</a>
                </div>
            </div>
        </div>
    </header>
	<div class="fullpage-nav">
    	<div class="nav-border">
        	<a href="javascript:void(0)" class="menu-close"></a>
            
            <?php
                wp_nav_menu( array( 
                    'theme_location' => 'menu-1',
                    'container' => '',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                ) ); 
            ?>
            
            <img src="<?php echo get_template_directory_uri(); ?>/image/menu-img.jpg">
        </div>
    </div>
	<div id="content" class="site-content">
