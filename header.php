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
                	<a class="branding" href="<?php echo get_site_url(); ?>"><img class="transition" src="<?php get_template_directory_uri() ?> '/image/chrd.jpg'" alt="BURO CHRD"></a>
                    <a class="menu transition" href="javascript:void(0)"><span class="hamburger-menu"></span> menu</a>
                </div>
            </div>
        </div>
    </header>
	<div class="fullpage-nav">
    	<div class="nav-border">
        	<a href="javascript:void(0)" class="menu-close"></a>
            <ul>
                <li><a href=""><span>Home</span></a></li>
                <li><a href=""><span>Madhupur CHRD</span></a></li>
                <li><a href=""><span>Gazipur CHRD</span></a></li>
                <li><a href=""><span>Chittagong CHRD</span></a></li>
                <li><a href=""><span>Khulna CHRD</span></a></li>
                <li><a href=""><span>Comilla CHRD</span></a></li>
                <li><a href=""><span>Sylhet CHRD</span></a></li>
            </ul>
            
            <img src="<?php get_template_directory_uri() ?>/image/menu-img.jpg">
        </div>
    </div>
	<div id="content" class="site-content">
