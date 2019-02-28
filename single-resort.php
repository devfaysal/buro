<?php get_header(); ?>
    <section class="banner innerpageBanner clear-fixed">
    	<div class="slider-border"></div>
    	<div class="fluid-container">
        	<div class="content-row">
            	<div class="grid-12">
                	<div class="slider-wrapper">
                        <?php 
                        if( have_rows('slider') ): 
                            // loop through the rows of data
                            while ( have_rows('slider') ) : the_row();
                            // display a sub field value
                        ?>

                            <div class="slide">
                                <img src="<?php the_sub_field('image'); ?>">
                            </div>

                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <div class="banner-content">
                    	<h1 class="bold"><?php the_field('slider_title'); ?></h1>
                        <br clear="all">
                    	<a href="<?php the_field('slider_button_link'); ?>" class="button-large button-white semibold">book now</a>
                        <p><?php the_field('slider_subtitle'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clear-fixed inner-sections thumbnail-listing gray-section-bg">
    	<div class="fluid-container">
        	<div class="content-row">
            	<div class="grid-12 text-center">
                	<h2 class="section-title text-uppercase"><?php the_field('heading'); ?></h2>
                    <p class="times-new-roman text-big text-italic"><?php the_field('description'); ?></p>
                </div>
            </div>
        	<div class="content-row">
                <?php
                if( have_rows('gallery') ): 
                    // loop through the rows of data
                    while ( have_rows('gallery') ) : the_row();
                    // display a sub field value
                ?>
                    <div class="grid-4">
                        <div class="image-thumbnail">
                            <a class="image-holder" href="javascript:void(0)" style="background-image:url(<?php the_sub_field('image'); ?>);">
                                <span class="enlarge-view">
                                    <span class="enlarge-content">
                                        <i class='el el-plus'></i>
                                        <br clear="all">
                                        <span class="inline times-new-roman white text-italic">Enlarge View</span>
                                    </span>
                                </span>
                            </a>
                            <a class="chrd-name bold text-uppercase text-center" href=""><?php the_sub_field('title'); ?></a>
                        </div>
                    </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
    
    <section class="clear-fixed inner-sections thumbnail-listing">
    	<div class="fluid-container">
        	<div class="content-row">
            	<div class="grid-12 text-center">
                	<h2 class="section-title text-uppercase">rooms</h2>
                    <p class="times-new-roman text-big text-italic">Our rooms will give you the pleasure and satisfaction that you were looking forward in your holiday. Our range of services will make you feel like as if you were a king and this is your kingdom</p>
                </div>
            </div>
        	<div class="content-row margin-top-50">
                <?php
                if( have_rows('rooms') ): 
                    // loop through the rows of data
                    while ( have_rows('rooms') ) : the_row();
                    // display a sub field value
                ?>
                    <div class="grid-4">
                        <div class="thumbnail">
                            <img src="<?php the_sub_field('image'); ?>">
                            <div class="thumb-label"><span class="inline text-uppercase padding-top-10"><?php the_sub_field('title'); ?></span> <a class="inline float-right button-small button-whiteborder times-new-roman text-italic" href="<?php the_sub_field('link'); ?>">View Details</a></div>
                        </div>
                    </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
    <section class="clear-fixed contactus-bg inner-sections">
    	<div class="content-row">
        	<div class="grid-12">
            	<h2 class="section-title white text-uppercase text-center">Contact Us</h2>
            </div>
        </div>
        <div class="content-row">
        	<div class="grid-6 border-right">
            	<div class="padding-40 text-right">
                	<p class="text-big bold text-uppercase white margin-top-zero">Our Location</p>
                    <p class="text-small white ultralight">House NO: 69/C Road No 2, Ragendrapur, <br> Gazipur, Dhaka, Bangladesh</p>
                </div>
            </div>
            <div class="grid-6">
            	<div class="padding-40">
                	<p class="text-big bold text-uppercase white margin-top-zero">Reservation Contact details</p>
                    <p class="text-small white ultralight margin-zero">Phone No: 01755603311, 01955603311, 01199611606</p>
                    <p class="text-small white ultralight margin-zero">Email Address: gazipurchrd@chrdresorts.com</p>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
